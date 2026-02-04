 <?php
 include "../header/header.php";
 include "../header/config.php";

 $current_page = basename($_SERVER['PHP_SELF']);

  $ID = $_GET['id'] ?? null; 
 if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Nama = $_POST['Nama'];
    $Alamat = $_POST['alamat'];

 

    $Data = mysqli_query($connection, "UPDATE tbl_admin SET Username='$Username', Password='$Password', Nama='$Nama', Alamat='$Alamat' where ID='$ID' ");
    
    
};
if($ID){
    $query = mysqli_query($connection, "SELECT * FROM `tbl_admin` WHERE id = '$ID'");
$siswa = mysqli_fetch_assoc($query);
}

 ?>


 <div class="container py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
                     <h2 class="text-center">Tambah Siswa</h2>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
            <form method="POST" class=" px-9">
            <div class="mb-3">
                <label for="Username" class="form-label">Username</label>
                <input type="text" class="form-control" id="Username" name="Username" value ="<?=
                $siswa['Username']; ?>"> 
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Password</label>
                <input type="text" class="form-control" id="Password" name="Password" value ="<?=
                $siswa['Password'];?>">
            </div>
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="Nama" name="Nama"  value ="<?=
                $siswa['Nama']; ?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text "class="form-control" id="alamat" name="alamat" rows="3"  value ="<?=
                $siswa['Alamat']; ?>"></input>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Siswa</button>
        </form>
          </div>
        </div>
    </div>
</div>

<?php if ($berhasil){ ?>
  <script>
  Swal.fire({
  title: "Berhasil!",
  text: "Data Sudah Ditambahkan!",
  icon: "success",
  showConfirmButton: false,
}).then(() => {
    window.location.href = "admin.php";
});
  </script>
<?php } ?>