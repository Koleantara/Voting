<?php
session_start();
include "pages/header/config.php";
$current_page = basename($_SERVER['PHP_SELF']);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

    $query = mysqli_query($connection, "SELECT * from tbl_admin where Username = '$Username' and Password = '$Password'");

    if (mysqli_num_rows($query) == 1) {
        $Data = mysqli_fetch_assoc($query);
        $_SESSION['login'] = true;
        $_SESSION['Nama'] = $Data['Nama'];
        $_SESSION['ID'] = $Data['ID'];

        echo "<script>
        alert('Login Berhasil');
        window.location = 'pages/Dashboard/dashboard.php';
        </script>";
    } else {
        echo "<script>
        alert('Login Berhasil');
        window.location = 'login_admin.php';
        </script>";
    };
}
