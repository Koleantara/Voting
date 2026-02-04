 <?php
 include "../header/config.php";
 $ID = $_GET['id'] ?? null; 


    mysqli_query($connection, "DELETE FROM tbl_admin where ID='$ID' ");


header( "Location: admin.php");
exit;
 ?>