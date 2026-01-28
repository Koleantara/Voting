 <?php
 include "header.php";
 include "config.php";
 
 if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Nama = $_POST['nama'];
    $Kelas = $_POST['kelas'];
    $Jurusan = $_POST['jurusan'];
    $Alamat = $_POST['alamat'];

    mysqli_query($connection, "INSERT INTO tbl_siswa (Nama,Kelas,Jurusan,Alamat) VALUES('$Nama','$Kelas','$Jurusan','$Alamat')");
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
<div class="card-shadow" style="width: 30%; padding: 20px;">
       <div class="card-body">
        <div class="container mt-5">

        
    </div>