<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Details Angkringan - Angkringan-O</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact - v1.1.1
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:3m.berkarya@gmail.com">Email</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 8577 7444 1563</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="http://wa.me/+6285777441563" class="twitter"><i class="bi bi-whatsapp"></i></a>
        <a href="https://www.facebook.com/romadhonipemegang.jalurbarat" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/r.don_i" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://github.com/romadhoni04" class="github"><i class="bi bi-github"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Angkringan-O<span></span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="portofolio.html">Angkringan</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="profil.html">Profil</a></li>
          <li><a href="kontak.html">Kontak</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Detail Profil Angkringan</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Detail Angkringan</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">

      <?php 
       include "koneksi.php";
       $kode = $_GET['kode'];
$ret=mysqli_query($conn,"select * from tb_dataangkringan where kode='$kode'");

//$ret=mysqli_query($conn,"select * from tb_gambar join tb_dataangkringan where kode = $kode");
while($row=mysqli_fetch_array($ret))
{
 
  ?>

 <?php 
       include "koneksi.php";
       $kode = $_GET['kode'];

$r=mysqli_query($conn,"select * from tb_gambar where kode='$kode'");
//$ret=mysqli_query($conn,"select * from tb_gambar join tb_dataangkringan where kode = $kode");

  while($ro=mysqli_fetch_array($r))
{



    /* $kode = $_GET['kode'];
     $select_products = $conn->prepare("SELECT * FROM tb_dataangkringan WHERE kode = ?"); 
     $select_products->execute([$kode]);
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){*/
   ?>
            
      <div class="container" data-aos="fade-up">

        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="admin/gambar/<?php echo $gambar?>" alt="">
              </div>

              <div class="swiper-slide">
                <img src="" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio/portfolio-2.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>
    

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8">
            <div class="portfolio-description">
              <h2><?php echo $row['namaangkringan'];?></h2>
              <p>
                <!--<?php echo $deskripsi?>-->
              </p>

    
                    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2><span>Menu</span> Angkringan</h2>
        </div>
        
        <div class="row menu-container">

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Berbagai Macam Nasi</a><span>Rp 2.500</span>
            </div>
            <div class="menu-ingredients">
              Nasi Dadar, Nasi Ayam, Nasi Teri, Nasi Rames
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Gorengan</a><span>Rp 2.000</span>
            </div>
            <div class="menu-ingredients">
              Sosis, Tempe, Bakwan
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Gorengan</a><span>Rp 1.000</span>
            </div>
            <div class="menu-ingredients">
              Tahu walik, Tahu Mercon
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Sate - Sate'an</a><span>Rp 2.500</span>
            </div>
            <div class="menu-ingredients">
              Sate Bakso, Sate Jengkol, Sate Usus
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Sate - Sate'an</a><span>Rp 2.500</span>
            </div>
            <div class="menu-ingredients">
              Sate Ati, Sate Sosis, Sate Tahu
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Sate - Sate'an</a><span>Rp 2.500</span>
            </div>
            <div class="menu-ingredients">
              Sate Kikil, Sate Keong
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Cemilan</a><span>Rp 1.000</span>
            </div>
            <div class="menu-ingredients">
              Kacang Kedelai, Kacang Ijo
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Minuman</a><span>Rp 4.000</span>
            </div>
            <div class="menu-ingredients">
              Jahe Geprek, Jeruk Panas
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Minuman</a><span>Rp 3.000</span>
            </div>
            <div class="menu-ingredients">
              Es Rencengan, Es Teh, Es Sirup, Kopi
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->

    <p>
      Menu menu makanan di angkringan ini sangat lah beragam, dan banyak sekali variasi nya serta bermacam macam juga harga nya. anda dapat memesan menu makanan tersebut melalui Contact Person yang sudah kami sediakan di Bagian Profil Angkringan atau Jika ingin berkunjung langsung bisa langsung mengklik Google Maps yang sudah tertera di Profil Angkringan.
    </p>

              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Halo semuanya, Terimakasih sudah membeli makanan ataupun minuman di Angkringan saya, Anda kenyang saya pun senang.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <div>
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Heris Riki R</h3>
                  <h4>Owner Angkringan Putra Melati</h4>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3>Profil Angkringan</h3>
              <ul>
                <li><strong>Nama Pemilik</strong> <span>Heris Riki R</span></li>
                <li><strong>Nama Angkringan</strong> <span>Putra Melati</span></li>
                <li><strong>Kontak</strong> <span>08980437226</span></li>
                <li><strong>Alamat Angkringan</strong> <iframe src="https://www.google.com/maps/embed?pb=!3m2!1sen!2sid!4v1667205093201!5m2!1sen!2sid!6m8!1m7!1s8HwWMECwqhk9jwauNuejWw!2m2!1d-6.748401480088934!2d110.7581239502613!3f304.9217671820477!4f-10.705198525357417!5f0.7820865974627469" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe></li>
                <li><a href="https://www.instagram.com/hrsrkiii/" class="btn-visit align-self-start">Ingin melakukan kerjasama?</a></li>
              </ul>
            </div>
          </div>

        </div>
 <?php
      }
  
   }
   ?>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <span>Angkringan-O</span>
            </a>
            <p>Website ini merupakan kumpulan Nama, lokasi dan menu angkringan di Kecamatan mayong, yang dibuat oleh 3 mahasiswa Politeknik Balekambang.</p>
            <div class="social-links d-flex mt-4">
              <a href="http://wa.me/+6285777441563" class="Whatsapp"><i class="bi bi-whatsapp"></i></a>
              <a href="https://www.facebook.com/romadhonipemegang.jalurbarat" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/r.don_i" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://github.com/romadhoni04" class="github"><i class="bi bi-github"></i></a>
            </div>
          </div>
  
          <div class="col-lg-2 col-6 footer-links">
            <h4>Tautan</h4>
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="portofolio.html">Angkringan</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="profil.html">Profil</a></li>
              <li><a href="kontak.html">Kontak</a></li>
            </ul>
          </div>
  
          <div class="col-lg-2 col-6 footer-links">
            <h4>Tautan lain nya</h4>
            <ul>
              <li><a href="https://www.polibang.ac.id/">Politeknik Balekambang</a></li>
              <li><a href="https://www.pesantrenbalekambang.org">Pesantren Roudlotul Mubtadiin</a></li>
              <li><a href="https://www.mahadalybalekambang.ac.id/">Ma'had Aly Balekambang</a></li>
              <li><a href="https://linktr.ee/romadhoni.0">Muda Karya</a></li>
              <li><a href="https://id-id.facebook.com/people/Angkringan/100087848260155/">Angkringan-O</a></li>
            </ul>
          </div>
  
          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Kontak</h4>
            <p>
              Angkringan-O <br>
              Mayong, Jepara<br>
              Jawa Tengah <br><br>
              <strong>Nomor:</strong> +6285 7774 41563<br>
              <strong>Email:</strong> 3m.berkarya@gmail.com<br>
            </p>
  
          </div>
  
        </div>
      </div>
  
      <div class="container mt-4">
        <div class="copyright">
          &copy; Copyright <strong><span>Angkringan-O</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
          Designed by <a href="https://linktr.ee/romadhoni.0">Muda Berkarya</a>
        </div>
      </div>
  
    </footer><!-- End Footer -->
    <!-- End Footer -->
  
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
    <div id="preloader"></div>
  
    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
  
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  
  </body>
  
  </html>