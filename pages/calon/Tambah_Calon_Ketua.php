 <?php
 include "../header/header.php";
 include "../header/config.php";

 $current_page = basename($_SERVER['PHP_SELF']);
 
 if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Nama = $_POST['Nama'];
    $Visi = $_POST['Visi'];
    $Misi = $_POST['Misi'];
    $Foto = $_POST['Foto'];

    $Data = mysqli_query($connection, "INSERT INTO tbl_calon (Nama,Visi,Misi,Foto) VALUES('$Nama','$Visi','$Misi','$Foto')");
  };
  if($Data){
    $berhasil = true;
  };
 ?>
 ?>


 <div class="container py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
                     <h2 class="text-center">Tambah Calon</h2>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
            <form method="POST" class=" px-9">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="Nama" required>
            </div>
            <div class="mb-3">
                <label for="visi" class="form-label">Visi</label>
                <input type="text" class="form-control" id="kelas" name="Visi" required>
            </div>
            <div class="mb-3">
                <label for="misi" class="form-label">Misi</label>
                <input type="text" class="form-control" id="jurusan" name="Misi" required>
            </div>
            <div class="mb-3">
                <label for="Foto" class="form-label">Foto</label>
                <textarea class="form-control" id="Foto" name="Foto" rows="3" required></textarea>
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
    window.location.href = "Calon_Ketua.php";
});
  </script>
<?php } ?>