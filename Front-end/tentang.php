<?php
// include database connection file
include_once("../admin/config.php");
$result = mysqli_query($mysqli, "SELECT * FROM l_tentang");
?>
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
      <a class="navbar-brand logo" href="../index.php">
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
		      <li class="nav-item ">
			      <a class="nav-link " href="../../perpustakaan/">Beranda</a>
		      </li>
          <li class="nav-item  active ">
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

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Tentang</h2>
				<ol class="breadcrumb header-bradcrumb">
				  <!-- <li><a href="index.html">Beranda</a></li>
				  <li class="active">Tentang</li> -->
				</ol>
			</div>
		</div>
	</div>
</section>


<section class="about-shot-info section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mt-20">
				<h2>Sejarah Perpustakaan<br></h2>
        <?php
        while($user_data = mysqli_fetch_array($result)){
				echo "<p>".$user_data['sejarah']."</p>";
        
        ?>
			</div>
			<div class="col-md-6">
				<img class="img-fluid" src="images/company/sejarah.jpeg" alt="">
			</div>
		</div>
	</div>
</section>



<section class="company-mission section-sm bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>Misi Kami</h3>
        <?php
				echo "<p>".$user_data['visi']."</p>";
        ?>
			</div>
			<div class="col-md-6">
				<h3>Visi Kami</h3>
        <?php
				echo "<p>".$user_data['misi']."</p>";
        }
        ?>
			</div>
		</div>
	</div>
</section>

	<!-- Start Our Team
		=========================================== -->
    <section class="team" id="team">
      <div class="container">

        <!-- section title -->
        <div class="col-12">
            <div class="title text-center ">
              <h2>Struktur Kepengurusan</h2>
              <div class="border"></div>
            </div>
          </div>
          <!-- /section title -->  


        <?php
          $stmt_struktur = $pdo_conn->prepare("SELECT * FROM l_struktur ORDER BY id ");
          $stmt_struktur->execute();
          $result_struktur = $stmt_struktur->fetchAll();
        ?>
        <div class="row">
        <?php
        		if(!empty($result_struktur)) { 
        		foreach($result_struktur as $row) {
        ?>
          
    
          <!-- team member -->
          <div class="col-md-4 col-sm-6 ">
            <br>
            <div class="team-member text-center">
              <div class="member-photo">
                <!-- member photo -->
                <?php echo"<img class='img-fluid' src='images/team/$row[foto]' alt='Meghna'>"?>
                <!-- /member photo -->
    
                <!-- member social profile -->
                <div class="mask">
                  <ul class="clearfix">
                    <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
                    <li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
                  </ul>
                </div>
                <!-- /member social profile -->
              </div>
    
              <!-- member name & designation -->
              <div class="member-content">
                <?php
                // $result = mysqli_query($mysqli, "SELECT * FROM struktur");
                // while($user_data = mysqli_fetch_array($result)){
                // echo"<h3>".$user_data['nama']."</h3>";
                // echo"<span>".$user_data['jabatan']."</span>";
                // }
                ?>
                <h3><?php echo $row["nama"]; ?></h3>
                <span><?php echo $row["jabatan"];?></span>
                
              </div>
              <!-- /member name & designation -->
    
            </div>
          </div>
          <!-- end team member -->        
          <?php
					}
					}
				?>
        </div> <!-- End row -->
      </div> <!-- End container -->
    </section> <!-- End section -->

	<section class="promo-video section-sm">
	<div class="container">
		<div class="row">
			<!-- section title -->
			<div class="col-12">
				<div class="title text-center">
					<h2>Our Promo Video</h2>
					<p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu.Sed condimentum iaculis ex,
						in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus luctus dignissim.</p>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->
			<div class="col-md-8 mx-auto">
				<iframe src="https://www.youtube.com/watch?v=_tmI61V55r0" width="100%" height="360" frameborder="0"
					webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>



	<!--
Start Call To Action
==================================== -->
<section class="call-to-action-2 section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2> <i>"If you only read the book that everyone else is reading, you can only think what everyone else is thinking"</i></h2>
				<h3>Haruki Murakami - Norwegian Wood</h3> 
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->



<section class="section grallery">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="title text-center">
					<h2>Sekilas Galeri</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore numquam esse vitae recusandae qui aspernatur, blanditiis, laboriosam dignissimos dolore facere provident ex? Porro, praesentium consectetur tempore. Nulla, error eius dolorem.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="company-gallery">
					<img src="images/company/gallery-1.jpg" alt="">
					<img src="images/company/gallery-2.jpg" alt="">
					<img src="images/company/gallery-3.jpg" alt="">
					<img src="images/company/gallery-4.jpg" alt="">
					<img src="images/company/gallery-5.jpg" alt="">
					<img src="images/company/gallery-5.jpg" alt="">
					<img src="images/company/gallery-1.jpg" alt="">
					<img src="images/company/gallery-2.jpg" alt="">
					<img src="images/company/gallery-3.jpg" alt="">
					<img src="images/company/gallery-4.jpg" alt="">
					<img src="images/company/gallery-5.jpg" alt="">
					<img src="images/company/gallery-5.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</section>



	<!--Start Call To Action
==================================== -->
<!-- <section class="call-to-action section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Let's Create Something Together</h2>
				<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin bibendum auctor, <br> nisi elit consequat ipsum, nesagittis sem nid elit. Duis sed odio sitain elit.</p>
				<a href="arsip@gmail.com" class="btn btn-main">Contact Us</a>
			</div> -->
		<!-- </div> 		End row -->
	<!-- </div>   	End container -->
<!-- </section>   End section -->




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