<?php
// include database connection file
include_once("../admin/config.php");
   $stmt_buku = $pdo_conn->prepare("SELECT * FROM m_buku ORDER BY RAND() LIMIT 8");
   $stmt_buku->execute();
   $result_buku = $stmt_buku->fetchAll();
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
  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <!-- Typography CSS -->
  <link rel="stylesheet" href="css/typography.css">
  <!-- Style CSS -->
  <link rel="stylesheet" href="css/style-katalog.css">
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="css/responsive.css"> 

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
         <li class="nav-item ">
            <a class="nav-link" href="tentang.php">Tentang</a>
         </li>
         <li class="nav-item  active ">
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
				<h2>Katalog Buku</h2>
				<ol class="breadcrumb header-bradcrumb">
				  <!-- <li><a href="index.html">Home</a></li>
				  <li class="active">Portfolio</li> -->
				</ol>
			</div>
		</div>
	</div>
</section>



<!-- books -->
<!-- Page Content  -->
<div id="content-page" class="content-page">
  <div class="container-fluid">
     <div class="row">
        <div class="col-lg-12">
           <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height rounded">
              <div class="newrealease-contens">
                 <ul id="newrealease-slider" class="list-inline p-0 m-0 d-flex align-items-center">
                    <li class="item">
                       <a href="javascript:void(0);">
                          <img src="images/new_realeases/01.jpg" class="img-fluid w-100 rounded" alt="">
                       </a>
                    </li>
                    <li class="item">
                       <a href="javascript:void(0);">
                          <img src="images/new_realeases/02.jpg" class="img-fluid w-100 rounded" alt="">
                       </a>
                    </li>
                    <li class="item">
                       <a href="javascript:void(0);">
                          <img src="images/new_realeases/03.jpg" class="img-fluid w-100 rounded" alt="">
                       </a>
                    </li>
                    <li class="item">
                       <a href="javascript:void(0);">
                          <img src="images/new_realeases/04.jpg" class="img-fluid w-100 rounded" alt="">
                       </a>
                    </li>
                    <li class="item">
                       <a href="javascript:void(0);">
                          <img src="images/new_realeases/05.jpg" class="img-fluid w-100 rounded" alt="">
                       </a>
                    </li>
                    <li class="item">
                       <a href="javascript:void(0);">
                          <img src="images/new_realeases/06.jpg" class="img-fluid w-100 rounded" alt="">
                       </a>
                    </li>
                    <li class="item">
                       <a href="javascript:void(0);">
                          <img src="images/new_realeases/07.jpg" class="img-fluid w-100 rounded" alt="">
                       </a>
                    </li>
                    <li class="item">
                       <a href="javascript:void(0);">
                          <img src="images/new_realeases/08.jpg" class="img-fluid w-100 rounded" alt="">
                       </a>
                    </li>
                    <li class="item">
                       <a href="javascript:void(0);">
                          <img src="images/new_realeases/09.jpg" class="img-fluid w-100 rounded" alt="">
                       </a>                              
                    </li>
                 </ul>
              </div>
           </div>
        </div>
        
        <div class="col-lg-12">
           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
              <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                 <div class="iq-header-title">
                    <h4 class="card-title mb-0">Browse Books</h4>
                 </div>
                 <div class="iq-card-header-toolbar d-flex align-items-center">                              
                    <a href="buku.php" class="btn btn-sm btn-white view-more">Lihat Selengkapnya</a>
                 </div>
              </div> 
              <div class="iq-card-body">  
                 <div class="row">
                    <?php
                        if(!empty($result_buku)) { 
                        foreach($result_buku as $row) {
                     ?>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                       <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                          <div class="iq-card-body p-0">
                             <div class="d-flex align-items-center">
                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                   <?php echo "<a href='javascript:void();'><img class='img-fluid rounded w-100' src='images/browse-books/$row[foto]' alt=''></a>"?>
                                   <div class="view-book">
                                      <a href="detail-buku.php?id=<?php echo $row ['id']?>" class="btn btn-sm btn-primary">Lihat Buku</a>
                                   </div>
                                </div>
                                <div class="col-6">
                                   <div class="mb-2">
                                      <?php echo "<h6 class='mb-1'>$row[judul_buku]</h6>"?>
                                      <?php echo "<p class='font-size-13 line-height mb-1'>$row[pengarang]</p>"?>
                                      <div class="d-block line-height">
                                         <span class="font-size-11 text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                         </span>                                             
                                      </div>
                                   </div>
                                   
                                   <div class="iq-product-action">
                                      <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                      <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                   </div>                                      
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <?php
                        }
                     }
                     ?>
                 </div>
              </div>
           </div>
        </div>
      <?php
         $stmt_kategori = $pdo_conn->prepare("SELECT * FROM m_kategori ORDER BY id ");
         $stmt_kategori->execute();
         $result_kategori = $stmt_kategori->fetchAll();
      ?>
        <div class="col-lg-12">
           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
              <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                 <div class="iq-header-title">
                    <h4 class="card-title mb-0">Category</h4>
                 </div>
              </div> 
              <div class="iq-card-body">  
                 <div class="row">
                    <?php
                        if(!empty($result_kategori)) { 
                        foreach($result_kategori as $row) {
                     ?>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                       <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                          <div class="iq-card-body p-0">
                             <div class="d-flex align-items-center">
                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                   <?php echo "<a href='javascript:void();'><img class='img-fluid rounded w-100' src='images/category/$row[foto]' alt=''></a>"?>
                                   <div class="view-book">
                                      <a href="kategori.php?id=<?php echo $row ['id']?>" class="btn btn-sm btn-primary">Lihat Kategori</a>
                                   </div>
                                </div>
                                <div class="col-6">
                                   <div class="mb-2">
                                      <?php echo "<h6 class='mb-1'>$row[nama_kategori]</h6>"?>
                                      <div class="d-block line-height">
                                         <span class="font-size-11 text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                         </span>                                             
                                      </div>
                                   </div>
                                   
                                   <div class="iq-product-action">
                                      <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                      <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                   </div>                                      
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <?php
                        }
                     }
                     ?>
                 </div>
              </div>
           </div>
        </div>
        
        <div class="col-lg-12">
           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
              <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                 <div class="iq-header-title">
                    <h4 class="card-title mb-0">Favorite Reads</h4>
                 </div>
                 <div class="iq-card-header-toolbar d-flex align-items-center">
                    <a href="kategori.html" class="btn btn-sm btn-white view-more">Lihat Selengkapnya</a>
                 </div>
              </div>                         
              <div class="iq-card-body favorites-contens">
                 <ul id="favorites-slider" class="list-inline p-0 mb-0 row">
                    <li class="col-md-4">
                       <div class="d-flex align-items-center">
                          <div class="col-5 p-0 position-relative">
                             <a href="javascript:void();">
                                <img src="images/favorite/01.jpg" class="img-fluid rounded w-100" alt="">
                             </a>                                
                          </div>
                          <div class="col-7">
                             <h5 class="mb-2">Every Book is a new Wonderful Travel..</h5>
                             <p class="mb-2">Penulis : Pedro Araez</p>                                          
                             <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                <span>Reading</span>
                                <span class="mr-4">78%</span>
                             </div>
                             <div class="iq-progress-bar-linear d-inline-block w-100">
                                <div class="iq-progress-bar iq-bg-primary">
                                   <span class="bg-primary" data-percent="78"></span>
                                </div>
                             </div>
                             <a href="#" class="text-dark">Baca Sekarang<i class="ri-arrow-right-s-line"></i></a>
                          </div>
                       </div>
                    </li>
                    <li class="col-md-4">
                       <div class="d-flex align-items-center">
                          <div class="col-5 p-0 position-relative">
                             <a href="javascript:void();">
                                <img src="images/favorite/02.jpg" class="img-fluid rounded w-100" alt="">
                             </a>                                
                          </div>
                          <div class="col-7">
                             <h5 class="mb-2">Casey Christie night book into find...</h5>
                             <p class="mb-2">Penulis : Michael klock</p>                                          
                             <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                <span>Reading</span>
                                <span class="mr-4">78%</span>
                             </div>
                             <div class="iq-progress-bar-linear d-inline-block w-100">
                                <div class="iq-progress-bar iq-bg-danger">
                                   <span class="bg-danger" data-percent="78"></span>
                                </div>
                             </div>
                             <a href="#" class="text-dark">Baca Sekarang<i class="ri-arrow-right-s-line"></i></a>
                          </div>
                       </div>
                    </li>
                    <li class="col-md-4">
                       <div class="d-flex align-items-center">
                          <div class="col-5 p-0 position-relative">
                             <a href="javascript:void();">
                                <img src="images/favorite/03.jpg" class="img-fluid rounded w-100" alt="">
                             </a>                                
                          </div>
                          <div class="col-7">
                             <h5 class="mb-2">The Secret to English Busy People..</h5>
                             <p class="mb-2">Penulis : Daniel Ace</p>                                          
                             <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                <span>Reading</span>
                                <span class="mr-4">78%</span>
                             </div>
                             <div class="iq-progress-bar-linear d-inline-block w-100">
                                <div class="iq-progress-bar iq-bg-info">
                                   <span class="bg-info" data-percent="78"></span>
                                </div>
                             </div>
                             <a href="#" class="text-dark">Baca Sekarang<i class="ri-arrow-right-s-line"></i></a>
                          </div>
                       </div>
                    </li>
                    <li class="col-md-4">
                       <div class="d-flex align-items-center">
                          <div class="col-5 p-0 position-relative">
                             <a href="javascript:void();">
                                <img src="images/favorite/04.jpg" class="img-fluid rounded w-100" alt="">
                             </a>                                
                          </div>
                          <div class="col-7">
                             <h5 class="mb-2">The adventures of Robins books...</h5>
                             <p class="mb-2">Penulis : Luka Afton</p>                                          
                             <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                <span>Reading</span>
                                <span class="mr-4">78%</span>
                             </div>
                             <div class="iq-progress-bar-linear d-inline-block w-100">
                                <div class="iq-progress-bar iq-bg-success">
                                   <span class="bg-success" data-percent="78"></span>
                                </div>
                             </div>
                             <a href="#" class="text-dark">Baca Sekarang<i class="ri-arrow-right-s-line"></i></a>
                          </div>
                       </div>
                    </li>
                 </ul>
              </div>
           </div>
        </div>
     </div>
  </div>
</div>
</div>



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

    <script src="js/popper.min.js"></script>
    <!-- Appear JavaScript -->
    <script src="js/jquery.appear.js"></script>
    <!-- Counterup JavaScript -->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Wow JavaScript -->
    <script src="js/wow.min.js"></script>
    <!-- Apexcharts JavaScript -->
    <script src="js/apexcharts.js"></script>
    <!-- Select2 JavaScript -->
    <script src="js/select2.min.js"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="js/smooth-scrollbar.js"></script>
    <!-- lottie JavaScript -->
    <script src="js/lottie.js"></script>
    <!-- am core JavaScript -->
    <script src="js/core.js"></script>
    <!-- am charts JavaScript -->
    <script src="js/charts.js"></script>
    <!-- am animated JavaScript -->
    <script src="js/animated.js"></script>
    <!-- am kelly JavaScript -->
    <script src="js/kelly.js"></script>
    <!-- am maps JavaScript -->
    <script src="js/maps.js"></script>
    <!-- am worldLow JavaScript -->
    <script src="js/worldLow.js"></script>
    <!-- Raphael-min JavaScript -->
    <script src="js/raphael-min.js"></script>
    <!-- Morris JavaScript -->
    <script src="js/morris.js"></script>
    <!-- Morris min JavaScript -->
    <script src="js/morris.min.js"></script>
    <!-- Flatpicker Js -->
    <script src="js/flatpickr.js"></script>
    <!-- Style Customizer -->
    <script src="js/style-customizer.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="js/chart-custom.js"></script>
    <!-- Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!-- Custom js -->
    <script src="js/script.js"></script>

  </body>
  </html>