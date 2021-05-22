<!DOCTYPE html>
<?php session_start(); ?>
<?php include'koneksi.php' ?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HIMATIF WEB</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logohimatif.png" rel="icon">
  <link href="assets/img/logohimatif.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: KELOMPOK
  * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center">
          <h1 class="logo mr-2 mt-2"><a href="index.php"><img src="assets/img/logohimatif.png"> HIMATIF</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block ml-auto">
            <ul>
              <li class="active"><a href="#hero"><i class="fas fa-home mr-2"></i>Beranda</a></li>
              <li class="drop-down"><a href="#about"><i class="fas fa-sitemap mr-2"></i>Profil</a>
                <ul>
                  <li> <a href="kepengurusan.php"><i class="fas fa-user-astronaut mr-2"></i>Susunan Kepengurusan</a> </li> 
                  </ul>
              </li>
              <li><a href="#services"><i class="fas fa-chart-line mr-2"></i>Kepengurusan</a></li>
              <li><a href="#contact"><i class="fas fa-address-card mr-2"></i>Kontak</a></li>
              <?php
              if(!isset($_SESSION)) 
              {
               session_start();
             }
             if(!isset($_SESSION['sebagai'])){ ?>
             <?php  }else{?>
              <li class="drop-down"><a href=""><i class="fas fa-user-astronaut mr-2"></i>Pengurus</a>
                <ul>
                  <li><a href="kepengurusan/dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard Pengurus</a></li>
                  <li><a href="kepengurusan/pengurus.php"><i class="fas fa-user-astronaut mr-2"></i>Data Pengurus</a></li>
                  <li><a href="kepengurusan/databarang.php"><i class="fas fa-archive mr-2"></i>Data Sekre</a></li>
                  <li><a href="kepengurusan/datakegiatan.php"><i class="fas fa-chart-line mr-2"></i>Data Kegiatan</a></li>
                  <li><a href="kepengurusan/aspirasi.php"><i class="fas fa-box-open mr-2"></i>Kotak Aspirasi</a></li>
                </ul>
              </li>
            <?php } ?>

          </ul>
        </nav><!-- .nav-menu -->
        <?php
        if(!isset($_SESSION)) 
        {
         session_start();
       }
       if(!isset($_SESSION['sebagai'])){ ?>

         <a href="homelogin.php" class="get-started-btn scrollto">LOGIN</a>
       <?php  }else{?>
        <a href="logout.php" class="get-started-btn scrollto">EXIT</a>
      <?php } ?>

    </div>
  </div>

</div>
</header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

      <div class="container-fluid" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1>HIMATIF POLINDRA</h1>
            <h2>Himpunan Mahasiswa Teknik Informatika adalah organisasi himpunan mahasiswa program studi bagi seluruh mahasiswa Teknik Informa...</h2>
            <div><a href="#about" class="btn-get-started scrollto">Selanjutnya..</a></div>
          </div>
          <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
            <img src="assets/img/logohimatif.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- End Hero -->

    <main id="main">

      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container">

          <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
              <img src="assets/img/hero-bggg.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-6 pt-lg-1 order-2 order-lg-1 content" data-aos="fade-right">
              <h3>HIMATIF POLINDRA</h3>
              <b class="font-italic">
                Himpunan Mahasiswa Teknik Informatika merupakan organisasi mahasiswa yang berperan untuk menampung dan mengarahkan kegiatan mahasiswa program studi Teknik Informatika 
              </b>

              <ul>
                <li><br><i class="icofont-check-circled"></i>VISI :</li>
                <li>”Menjadikan Himpunan Mahasiswa Teknik Informatika sebagai organsasi yang lebih aktif, kreatif, dan solid serta mampu mengembangkan kualitas mahasiswa/i baik softskill maupun hardskill”<br></li>
                <li><i class="icofont-check-circled"></i>MISI :</li>
                <li>1. Meningkatkan kualitas HIMATIF sebagai sarana penyalur aspirasi Mahasiswa Jurusan Teknik Informatika.
                  <br>
                  <br>
                  2. Menyusun dan melaksanakan sebuah program kerja yang bertujuan mengembangkan kualitas Mahasiswa Jurusan Teknik Informatika.
                  <br>
                  <br>
                  3. Meningkatkan rasa kekeluargaan antar anggota HIMATIF.
                  <br>
                  <br>
                4. Meningkatkan kesadaran untuk bersama-sama memajukan HIMATIF POLINDRA.</li>
                <br>
              </ul>
            </div>
          </div>
        </div>


      </section>
      <!-- End About Section -->
      <section id="services" class="services services-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Susunan Kepengurusan</h2>
          </div>
          <div class="col-lg-auto col-md-auto d-flex align-items-stretch ml-auto mr-auto mb-2" style="width: 60rem; height: 40rem" data-aos="zoom-in" data-aos-delay="100">    
                <img src="assets/img/pengurus/STRUKTUR.png" class="card-img-top" alt="...">
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="card" style="width: 30rem; height: 30rem">
                <img src="assets/img/pengurus/NONOP.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="text-align: center;">NOPIYA SARI</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="card" style="width: 30rem;">
                <img src="assets/img/pengurus/kahimwakahim.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="text-align: center;">ADHITYA ILHAM UTOYO<br>PUTRI SETYOWATI</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="card" style="width: 30rem; height: 30rem">
                <img src="assets/img/pengurus/ARUL.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="text-align: center;">ARUL RACHMAN</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="card" style="width: 30rem; height: 30rem">
                <img src="assets/img/pengurus/PSDM.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="text-align: center;">DONI (KADIV), AMEL, ALIF, ARIQ</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="card" style="width: 30rem;">
                <img src="assets/img/pengurus/HUMAS.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="text-align: center;">ALYA (KADIV), KIDUT, DEVINA, GENANDRA, KHUSNUL, AYU</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="card" style="width: 30rem; height: 30rem">
                <img src="assets/img/pengurus/RISTEK.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="text-align: center;">RAKHMAT (KADIV), HENDA, FALDI, UUN, KENTI, NADWA</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="card" style="width: 30rem; height: 30rem">
                <img src="assets/img/pengurus/KADERISASI.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="text-align: center;">SAKTI (KASUBDIV), ISAM, SYARIF, IDANG, DESI, MERRY, YUHANA, INDAH</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="card" style="width: 30rem;">
                <img src="assets/img/pengurus/INFOKOM.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="text-align: center;">DELIA (KASUBDIV), NANDA, BUNGA, WINDA, DIPA, IMAM, FIKRI</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="card" style="width: 30rem; height: 30rem">
                <img src="assets/img/pengurus/SC.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="text-align: center;">KAMALUDIN (KASUBDIV), HALIMAH, DZULFIKAR, FUAD</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="card" style="width: 30rem; height: 30rem">
                <img src="assets/img/pengurus/KEAKRABAN.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="text-align: center;">FAISAL (KASUBDIV), GILANG, MICHAEL, FAISHOL, KARTIKA, SINTIA, YAYAS, LUCKY</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="card" style="width: 30rem;">
                <img src="assets/img/pengurus/HUEKS.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="text-align: center;">BABEH (KASUBDIV), ALI, FARKHAN, IQBAL, KORIAH, SRI</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="card" style="width: 30rem; height: 30rem">
                <img src="assets/img/pengurus/KOMPETISI.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="text-align: center;">MUNIR (KASUBDIV), AFANDI, AGENG, FATIMAH, VIA, SRI</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="card" style="width: 30rem; height: 30rem">
                <img src="assets/img/pengurus/RT.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="text-align: center;">VANDA (KASUBDIV), AFIFAH, RIZQA, SALSA, DESI, RIFKI</p>
                </div>
              </div>
            </div>



          </div>

        </section>
       <!-- ======= Contact Section ======= -->
<section id="contact" class="contact contact-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>KONTAK</h2>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="info-box mb-4">
          <i class="bx bx-map"></i>
          <h3>ALAMAT</h3>
          <p>Jl. Lohbener Lama No.08, Lohbener, Legok, Indramayu, Kabupaten Indramayu, Jawa Barat</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <a href="mailto:himatif@polindra.ac.id"><div class="info-box  mb-4">
          <i class="bx bx-envelope"></i>
          <h3>EMAIL</h3>
          <p>himatif@polindra.ac.id</p>
        </div></a>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="info-box  mb-4">
          <i class="bx bx-phone-call"></i>
          <h3>Whatsapp</h3>
          <p>+62 819 0389 9045</p>
        </div>
      </div>

    </div>

    <div class="row">

      <div class="col-lg-6 ">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.888728372307!2d108.27929851449501!3d-6.408332664456582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6eb87d1fcaf97d%3A0x4fc15b3c8407ada4!2sPoliteknik%20Negeri%20Indramayu!5e0!3m2!1sid!2sid!4v1604865892730!5m2!1sid!2sid" width="550" height="415" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>

      <div class="col-lg-6">
        <form action="" method="POST" class="ml-3 mr-5" erctype="multipart/form-data">
          <div class="btn btn-primary p-2 mb-2"> KOLOM ASPIRASI </div>
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" data-msg="Please enter at least 4 chars" required>
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-msg="Please enter a valid email" required>
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subjek" id="subjek" placeholder="Subjek"  data-msg="Please enter at least 8 chars of subject" required>
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="isi" id="isi" rows="5" data-msg="Please write something for us" placeholder="Aspirasi, saran, atau kritikan..." required></textarea>
            <div class="validate"></div>
          </div>
          <div class="text-center"><button  name="simpan" class="btn btn-primary btn-xs">Kirim</button></div>
        </form>
        <?php 
        if (isset($_POST['simpan'])) {
          $nama = $_POST ['nama'];
          $email = $_POST ['email'];
          $subjek = $_POST ['subjek'];
          $isi = $_POST ['isi'];
          mysqli_query($koneksi,"INSERT INTO tb_aspirasi (nama, email, subjek, isi) VALUES('$nama','$email','$subjek','$isi')");
          echo "<meta http-equiv='refresh' content='1;url=index.php?'>";
          echo "<div class='alert alert-success text-center'> Aspirasi Berhasil Dikirim</div>";
        } ?>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="footer-contact">
          <h3>HIMATIF POLINDRA</h3>
          <hr>
          <p>
            Jl. Lohbener Lama No.08, Lohbener, Legok, Indramayu, Kabupaten Indramayu, Jawa Barat<br>
            Indonesia <br><br>
            <strong>Whatsapp:</strong> +62 819 0389 9045<br>
            <a href="mailto:himatif@polindra.ac.id"><strong>Email:</strong> himatif@polindra.ac.id<br></a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright-wrap d-md-flex py-4">
      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Kelompok 1</span></strong>. All Rights Reserved
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://youtube.com/himatifpolindra" class="youtube"><i class="bx bxl-youtube"></i></a>
        <a href="https://twitter.com/himatifpolindra" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://facebook.com/himatifpolindra" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://instagram.com/himatif_polindra" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>

  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>