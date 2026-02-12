<?php
session_start();

// if(!isset($_SESSION['login'])){
//   header("Location: login.php");
// }
include "pages/header/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - QuickStart Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <img src="assets/img/logo.png" alt="">
        <h1 class="sitename">QuickStart</h1>
      </a>

      <nav id="navmenu" class="navmenu">

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted"> <?=$_SESSION['Nama'] ?>
      <a href="logout.php"
      onclick="return confirm('Yakin MAu LogOut?')"
      class="btn btn-danger"
      style="font-size: 14px; padding:8px 25px; margin: 0 0 0 10px; border-radius:50px; transition: 0.3s;">Logout</a>
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="hero-bg">
        <img src="assets/img/hero-bg-light.webp" alt="">
      </div>

  <form action="proses_vote.php" method="POST" id="formvote">

      <input type="hidden" name="ID" id="ID">

      <div class="container text-center d-flex flex-column justify-content-center align-items-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
          <h1 data-aos="fade-up">Voting Calon <span>Ketua Osis</span></h1>
          <p data-aos="fade-up" data-aos-delay="100">Klik Sekarang, Tentukan Masa Depan!<br></p>
          <div class="row justify-content-center g-4">
            <?php
            $no = 1;
            $query = mysqli_query($connection, "select * from tbl_calon");
            foreach ($query as $Data): {    
            }
            ?>
                        
                        
            <div class="col-md-4">
              <div class="card calon-card mt-5 text-center shadow d-flex" 
              onclick="pilihCalon(<?= $Data['ID'] ?>, this)">

                <span class="badge bg-primary position-absolute top-0 start-0 m-2 fs-2 px-3 py-2">
                  <?= sprintf("%2d", $no++) ?>
                </span>
                <img src="assets_awal/<?= $Data['Foto'] ?>" class="card-img-top d-flex justify-conten-center align-item-center" alt="..." style="height:400px; object-fit:cover;">




                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet vitae totam eaque deleniti accusantium. Adipisci nesciunt ipsa dolores incidunt exercitationem aut, perspiciatis pariatur maxime deleniti sint nobis dolorem voluptatibus iste sequi quisquam repellat qui ratione sunt quaerat cum. Inventore pariatur in at dignissimos totam repellendus officia quidem obcaecati corporis laboriosam!




                </div>
              </div>
              
            </div>
            <?php endforeach ?>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-lg btn-primary px-5" id="btnPilih" disable>PILIH</button>
 
           
</form>
             </div>
          </div>
    </section><!-- /Hero Section -->



    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
<script>
  function pilihCalon(id,card){

  document.getElementById("ID").value = id;

  document.getElementById('btnPilih').disable = false;

  let semua_card = document.querySelectorAll(".calon-card");
  
  semua_card.forEach(kartu_satuan =>{
    kartu_satuan.classList.remove("border-info", "border-3")
  })

  card.classList.add("border-info", "border-3");
  }
</script>
</body>

</html>