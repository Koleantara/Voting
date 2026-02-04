 <?php
 include "../header/config.php";
 $ID = $_GET['id'] ?? null; 


    mysqli_query($connection, "DELETE FROM tbl_calon where ID='$ID' ");


header( "Location: Calon_Ketua.php");
exit;
 ?>