 <?php
 include "config.php";
 $ID = $_GET['id'] ?? null; 


    mysqli_query($connection, "DELETE FROM tbl_siswa where ID='$ID' ");


header( "Location: siswa.php");
exit;
 ?>