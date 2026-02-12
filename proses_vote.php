 <?php
 include "header/config.php";
 $current_page = basename($_SERVER['PHP_SELF']);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$id_calon=$_POST['id_calon'];
$tanggal = date('Y-m-d H:i:s');

    $Data = mysqli_query($connection, "INSERT INTO tbl_voting (id_calon,Tanggal,id_siswa) VALUES('$id_calon','$tanggal','0')");
  
    if($Data){
    $berhasil = true;
    }
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
            <form method="POST" class=" px-9" enctype = "multipart/form-data">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas" required>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" required>
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
    window.location.href = "siswa.php";
});
  </script>
<?php } ?>