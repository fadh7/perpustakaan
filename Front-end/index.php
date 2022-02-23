<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Bingo One page parallax responsive HTML Template ">
  
  <meta name="author" content="Themefisher.com">

  <title>SIMPUSDA</title>

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
  
  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="plugins/lightbox2/dist/css/lightbox.min.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css"> 
  

</head>

<body id="body">

 <!--
  Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class='preloader'>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div> 
  <!--
  End Preloader
  ==================================== -->


  

<!--
Fixed Navigation
==================================== -->
<header class="navigation fixed-top">
  <div class="container">
    <!-- main nav -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- logo -->
      <a class="navbar-brand logo" href="../perpustakaan/">
        <img class="logo-default" src="images/logo.png" alt="logo"/>
        <img class="logo-white" src="images/logo-white.png" alt="logo"/>
      </a>
      <!-- /logo -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto text-center">
          <li class="nav-item active">
            <a class="nav-link" href="../perpustakaan/">Beranda</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="tentang.php">Tentang</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="katalog.php">Katalog Buku</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="kontak.php">Kontak</a>
          </li>
		      <li class="nav-item ">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /main nav -->
  </div>
</header>
<!--
End Fixed Navigation
==================================== -->


	<div class="hero-slider">
	<div class="slider-item th-fullpage hero-area" style="background-image: url(images/slider/slider-1.jpeg);">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Selamat Datang di Website<br>
						Perpustakaan Daerah Banjarmasin</h1>
					<p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Menyediakan layanan informasi serta peminjaman buku <br> veritatis ipsa aliquam tempore nostrum id
						officia quaerat eum corrupti, <br> ipsa aliquam velit.</p>
					<a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn btn-main" href="login.php">Login</a>
				</div>
			</div>
		</div>
	</div>
	<div class="slider-item th-fullpage hero-area" style="background-image: url(images/slider/slider-2.jpeg);">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1"> WEBSITE SIMPUSDA <br> 
						</h1>
					<p data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".5">Sistem Perpustakaan Daerah Banjarmasin ini menyediakan layanan peminjaman buku dan e-book
						<br> Serta menyediakan informasi terkait buku dan perpustakaan.</p>
					<a data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".8"  class="btn btn-main" href="daftar.php">Daftar Member</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!--
		Start Blog Section
		=========================================== -->
    <?php
    // include database connection file
    include_once("../admin/config.php");
    $result = mysqli_query($mysqli, "SELECT * FROM l_berita");
    ?>

<section class="blog" id="blog">
	<div class="container">
        <?php
          $stmt_berita = $pdo_conn->prepare("SELECT * FROM l_berita ORDER BY id ");
          $stmt_berita->execute();
          $result_berita = $stmt_berita->fetchAll();
        ?>
		<div class="row">
			<!-- section title -->
			<div class="col-12">
				<div class="title text-center ">
					<h2> Berita <span class="color">Acara</span></h2>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->
			<!-- single blog post -->
      <?php
        		if(!empty($result_berita)) { 
        		foreach($result_berita as $row) {
        ?>
        
			  <article class="col-md-4 col-sm-6 col-xs-12 clearfix ">
				<div class="post-item">
					<div class="media-wrapper">
						<?php echo "<img src='images/blog/$row[foto]' alt='amazing caves coverimage' class='img-fluid'>"?>
					</div>

					<div class="content">
          <?php echo "<h3><a href='single-post.php?id=$row[id]'>$row[judul]</a></h3>"?>
						<?php echo "<p>$row[keterangan]</p>"?>
            <a class='btn btn-main' href="single-post.php?id=<?php echo $row['id']; ?>">Baca selengkapnya</a>
					</div>
				</div>
			</article>
			<!-- /single blog post -->
      <?php
            }
          }
          ?>
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section -->

<footer id="footer" class="bg-one">
  <div class="top-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>Tentang Website</h3>
          <p>Sistem Perpustakaan Daerah Banjarmasin ini menyediakan layanan peminjaman buku dan e-book, Serta menyediakan informasi terkait buku dan perpustakaan.</p>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Layanan </h3></li>
            <li><a href="#">Pemesanan Buku</a></li>
            <li><a href="#">Peminjaman Buku</a></li>
            <li><a href="#">informasi Buku</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Jam Kerja</h3></li>
			      <li><a href="#">Minggu | 08.00 - 13.00 WITA</a></li>
            <li><a href="#">Senin | 08.00 - 15.00 WITA</a></li>
			      <li><a href="#">Selasa | 08.00 - 15.00 WITA</a></li>
			      <li><a href="#">Rabu | 08.00 - 15.00 WITA</a></li>
			      <li><a href="#">Kamis | 08.00 - 15.00 WITA</a></li>
            <li><a href="#">Jumat | 08.00 - 11.00 WITA </a></li>
			      <li><a href="#">Sabtu | Tutup</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Sosial Media</h3></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Youtube</a></li>
            <li><a href="#">Pinterest</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

      </div>
    </div> <!-- end container -->
  </div>
  <div class="footer-bottom">
    <h5>Copyright &copy; <script type="text/javascript">
      new Date().getFullYear()>document.write(""+new Date().getFullYear());
      </script> All rights reserved.</h5>
    <h6><a href="">Diskominfotik Kota Banjarmasin </a></h6>
  </div>
</footer> <!-- end footer -->


    <!-- end Footer Area
    ========================================== -->
    

    
    <!-- 
    Essential Scripts
    =====================================-->
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script  src="plugins/google-map/gmap.js"></script>

    <!-- Form Validation -->
    <script src="plugins/form-validation/jquery.form.js"></script> 
    <script src="plugins/form-validation/jquery.validate.min.js"></script>
    
    <!-- Bootstrap4 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Parallax -->
    <script src="plugins/parallax/jquery.parallax-1.1.3.js"></script>
    <!-- lightbox -->
    <script src="plugins/lightbox2/dist/js/lightbox.min.js"></script>
    <!-- Owl Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <!-- filter -->
    <script src="plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- Smooth Scroll js -->
    <script src="plugins/smooth-scroll/smooth-scroll.min.js"></script>
    
    <!-- Custom js -->
    <script src="js/script.js"></script>

  </body>
  </html>
