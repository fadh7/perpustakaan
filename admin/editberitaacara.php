<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$stmt_berita = $pdo_conn->prepare("SELECT * FROM l_berita WHERE id=" ."'" . $_GET['id'] . "'");
$stmt_berita->execute();
$result_berita = $stmt_berita->fetchAll();
?>
<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{    
        
    // update berita
    $stmt=$pdo_conn->prepare("UPDATE l_berita SET judul=:judul,keterangan=:keterangan,isi=:isi,foto=:foto, tanggal=:tanggal WHERE id=:id");
    $stmt->bindParam(':id', $_POST['id']);
    $stmt->bindParam(':judul', $_POST['judul']);
    $stmt->bindParam(':keterangan', $_POST['keterangan']);
    $stmt->bindParam(':isi', $_POST['isi']);
    $stmt->bindParam(':foto', $_POST['foto']);
    $stmt->bindParam(':tanggal', $_POST['tanggal']);
    $berita = $stmt->execute();
    
    // Redirect to homepage to display updated user in list
    header("Location: beritaacara.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIMPUSDA ADMIN</title>

     <!-- Favicon icon -->
     <link rel="icon" type="image/png" sizes="16x16" href="./img/logobaru.png">
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="datepicker/js/bootstrap-datepicker.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img class="logo-abbr" height="60px" src="./img/logobaru.png" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">SIMPUSDA ADMIN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="user.php">
                    <i class="fa fa-user"></i>
                    <span>User</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kategoribuku.php">
                    <i class="fa fa-filter"></i>
                    <span>Kategori Buku</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="databuku.php">
                    <i class="fa fa-book"></i>
                    <span>Data Buku</span></a>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-laptop"></i>
                    <span>Data Peminjaman</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white collapse-inner rounded">
                        <a class="collapse-item" href="pinjambuku.html">Pinjam Buku</a>
                        <a class="collapse-item" href="pengembalianbuku.html">Pengembalian Buku</a>
                        <a class="collapse-item" href="riwayatpeminjaman.html">Riwayat Peminjaman</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kritikdanrequest.php">
                    <i class="fa fa-bell"></i>
                    <span>Kritik dan Request Buku</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa fa-wrench"></i>
                    <span>Konfigurasi</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="tentang.php">Tentang</a>
                        <a class="collapse-item" href="beritaacara.php">Berita Acara</a>
                        <a class="collapse-item" href="strukturkepengurusan.php">Struktur Kepengurusan</a>
                        <a class="collapse-item" href="statistikpengunjung.php">Statistik Pengunjung</a>
                    </div>
                </div>
            </li>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <h3 class="h3 mb-0 text-gray-800">Berita Acara</h3>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                            <!-- Dropdown - User Information -->
                                <div></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                        <form action="" method="POST" name="form1">
                                <div class='form-group'>
                                <label for='exampleFormControlInput1'>Judul</label>
                                <input type='text' class='form-control' id='exampleFormControlInput1' name="judul" autocomplete="off" value="<?php echo $result_berita[0]['judul'];?>">
                                </div>
                                <div class='form-group'>
                                    <label for='exampleFormControlInput1'>Keterangan</label>
                                    <input type='text' class='form-control' id='exampleFormControlInput1' name="keterangan" autocomplete="off" value="<?php echo $result_berita[0]['keterangan'];?>">
                                </div>
                                <div class='form-group'>
                                    <label for='exampleFormControlInput1'>Isi</label>
                                    <input type='text' class='form-control' id='exampleFormControlInput1' name="isi" autocomplete="off" value="<?php echo $result_berita[0]['isi'];?>">
                                </div>
                                <div class='form-group'>
                                    <label for='exampleFormControlInput1'>Tanggal</label>
                                    <input type='text' class='form-control datepicker' id='exampleFormControlInput1' name="tanggal" autocomplete="off" value="<?php echo $result_berita[0]['tanggal'];?> ">
                                </div>
                                <div class='form-group'>
                                    <label for='exampleFormControlInput1'>Gambar</label><br>
                                    <input type='file' accept="image/*" id='exampleFormControlInput1' name="foto" value="" required><br>
                                </div>
                                <div class='form-footer'>
                                <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                                <a href="beritaacara.php"><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></a>
                                <button type="submit" name="update" value="Edit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>   
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                    <span>Copyright &copy; <script type="text/javascript">
                            new Date().getFullYear()>document.write(""+new Date().getFullYear());
                            </script> SIMPUSDA ADMIN</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <!-- Warning Delete -->
    <script type="text/javascript">
    $('.confirmation').on('click', function(){
      return confirm ('Yakin Ingin Menghapus?');
    })
    </script>
    <!-- Menambahkan jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Menambahakan Date Range Picker -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <script type="text/javascript">

    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd', 
        startDate: new Date(),
        autoclose: true,
        todayHighlight:true,
    });
    </script>

</body>

</html>