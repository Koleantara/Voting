 <?php
 include "../header/header.php";
 $ID = $_GET['id'] ?? null; 
 include "../header/config.php";
 $current_page = basename($_SERVER['PHP_SELF']);
 
 if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Nama = $_POST['nama'];
    $Kelas = $_POST['kelas'];
    $Jurusan = $_POST['jurusan'];
    $Alamat = $_POST['alamat'];

 

     $Data = mysqli_query($connection, "UPDATE tbl_siswa SET Nama='$Nama', Kelas='$Kelas', Jurusan='$Jurusan', Alamat='$Alamat' where ID='$ID' ");
    if($Data){
    $berhasil = true;
    }
    
};
if($ID){
    $query = mysqli_query($connection, "SELECT * FROM `tbl_siswa` WHERE id = '$ID'");
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
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value ="<?=
                $siswa['Nama']; ?>"> 
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas" value ="<?=
                $siswa['Kelas'];?>">
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan"  value ="<?=
                $siswa['Jurusan']; ?>">
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
    window.location.href = "siswa.php";
});
  </script>
<?php } ?>