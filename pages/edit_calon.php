 <?php
 include "header.php";
 $ID = $_GET['id'] ?? null; 
 include "config.php";
 
 if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Nama = $_POST['nama'];
    $Visi = $_POST['Visi'];
    $Misi = $_POST['Misi'];
    $Foto = $_POST['Foto'];

 

    mysqli_query($connection, "UPDATE tbl_calon SET Nama='$Nama', Visi='$Visi', Misi='$Misi', Foto='$Foto' where ID='$ID' ");
    
    
};
if($ID){
    $query = mysqli_query($connection, "SELECT * FROM `tbl_calon` WHERE id = '$ID'");
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
                <label for="Visi" class="form-label">Visi</label>
                <input type="text" class="form-control" id="Visi" name="Visi" value ="<?=
                $siswa['Visi'];?>">
            </div>
            <div class="mb-3">
                <label for="Misi" class="form-label">Misi</label>
                <input type="text" class="form-control" id="Misi" name="Misi"  value ="<?=
                $siswa['Misi']; ?>">
            </div>
            <div class="mb-3">
                <label for="Foto" class="form-label">Foto</label>
                <input type="text "class="form-control" id="Foto" name="Foto" rows="3"  value ="<?=
                $siswa['Foto']; ?>"></input>
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