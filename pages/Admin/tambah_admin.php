 <?php
 include "../header/header.php";
 include "../header/config.php";

 $current_page = basename($_SERVER['PHP_SELF']);

 if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Nama = $_POST['Nama'];
    $Alamat = $_POST['alamat'];

    $Data = mysqli_query($connection, "INSERT INTO tbl_admin (Username,Password,Nama,Alamat) VALUES('$Username','$Password',$Nama','$Alamat')");
    if($Data){
    $berhasil = true;
  };
  };
  
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
                <label for="nama" class="form-label">Username</label>
                <input type="text" class="form-control" id="nama" name="Username" required>
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Password</label>
                <input type="Password" class="form-control" id="kelas" name="Password" required>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Nama</label>
                <input type="text" class="form-control" id="jurusan" name="Nama" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
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