 <?php
 include "../header/header.php";
 include "../header/config.php";

 $current_page = basename($_SERVER['PHP_SELF']);
 
 if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Nama = $_POST['Nama'];
    $Visi = $_POST['Visi'];
    $Misi = $_POST['Misi']; 
    $Email = $_POST['Email'];

    $Folder = "../../assets_awal/";
    
    $namaFile = $_FILES['Foto']['name'];
    $tmpFile = $_FILES['Foto']['tmp_name'];

    $newName = time(). "_" . $namaFile;

    move_uploaded_file($tmpFile, $Folder . $newName);

    $query = mysqli_query($connection, "INSERT INTO tbl_calon (Nama,Email,Visi,Misi,Foto) 
    VALUES('$Nama','$Email','$Visi','$Misi','$newName')");
  };
  if($query){
    $Berhasil = true;
  };
 ?>


 <div class="container py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
                     <h2 class="text-center">Tambah Calon</h2>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
            <form method="POST" class=" px-9" enctype = multipart/form-data>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="Nama" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Email</label>
                <input type="Email" class="form-control" id="Emain" name="Email" required>
            </div>
            <div class="mb-3">
                <label for="visi" class="form-label">Visi</label>
                <input type="text" class="form-control" id="kelas" name="Visi" required>
            </div>
            <div class="mb-3">
                <label for="misi" class="form-label">Misi</label>
                <input type="text" class="form-control" id="jurusan" name="Misi" required>
            </div>
            <div class="mb  -3">
                <label for="Foto" class="form-label">Foto</label>
                <input class = "form-control" name = "Foto" type="file">
            </div>
            <button type="submit" class="btn btn-primary">Tambah Siswa</button>
        </form>
          </div>
        </div>
    </div>
</div>

<?php if ($Berhasil){ ?>
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