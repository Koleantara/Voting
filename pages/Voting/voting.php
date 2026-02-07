 <?php
 include "../header/header.php";
 include "../header/config.php";
 
 if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Nama = $_POST['Nama'];
    $Misi = $_POST['Misi'];
    $Visi = $_POST['Visi'];
    $Foto = $_POST['Foto'];

    mysqli_query($connection, "INSERT INTO tbl_calon (Nama,Misi,Visi,Foto) VALUES('$Nama','$Misi','$Visi','$Foto')");
  };
  
 ?>

<style> 
ul {
  list-style-type: none;
}

li {
  display: inline-block;
}

input[type="radio"][id^="cb"] {
  display: none;
}

label {
  border: 1px solid #fff;
  padding: 10px;
  display: block;
  position: relative;
  margin: 10px;
  cursor: pointer;
}

label:before {
  background-color: white;
  color: white;
  content: " ";
  display: block;
  border-radius: 50%;
  border: 1px solid grey;
  position: absolute;
  top: -5px;
  left: -5px;
  width: 25px;
  height: 25px;
  text-align: center;
  line-height: 28px;
  transition-duration: 0.4s;
  transform: scale(0);
}

label img {
  height: 100px;
  width: 100px;
  transition-duration: 0.2s;
  transform-origin: 50% 50%;
}

:checked + label {
  border-color: #ddd;
}

:checked + label:before {
  content: "✓";
  background-color: grey;
  transform: scale(1);
}

:checked + label img {
  transform: scale(0.9);
  box-shadow: 0 0 5px #333;
  z-index: -1;
}
</style>
 <div class="container py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
                     <h2 class="text-center">Tambah Siswa</h2>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
            <form action="">
                <ul>
  <li><input type="radio" name="test" id="cb1" />
    <label for="cb1"><img src="https://i.pinimg.com/280x280_RS/14/39/21/1439210c9874771b03542a839ffdca06.jpg" /></label>
  </li>
  <li><input type="radio" name="test" id="cb2" />
    <label for="cb2"><img src="https://i.pinimg.com/280x280_RS/14/39/21/1439210c9874771b03542a839ffdca06.jpg" /></label>
  </li>
  <li><input type="radio" name="test" id="cb3" />
    <label for="cb3"><img src="https://i.pinimg.com/280x280_RS/14/39/21/1439210c9874771b03542a839ffdca06.jpg" /></label>
  </li>
  <li><input type="radio" name="test" id="cb4" />
    <label for="cb4"><img src="<?= $Foto ?>" /></label>
  </li>
</ul>
            </form>
                
            </div>
            
        </form>
          </div>
        </div>
    </div>
</div>
