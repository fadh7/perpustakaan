<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
// $result = mysqli_query($mysqli, "SELECT * FROM m_user ORDER BY id DESC");
$query = "SELECT m_user.id, m_user.username, m_user.password, m_user.nama_depan, m_user.nama_belakang, m_role.nama_role
FROM m_user INNER JOIN m_role ON m_user.m_role_id = m_role.id";
$result = mysqli_query($mysqli, $query);
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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
            <li class="nav-item active">
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
            <li class="nav-item ">
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
                    <h3 class="h3 mb-0 text-gray-800">Data User</h3>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
                                    <i class="fa fa-plus"></i>&nbsp; Tambah User
                                </button> <br><br>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                        <tr>
                                          <th scope="col">No.</th>
                                          <th scope="col">Username</th>
                                          <th scope="col">Password</th>
                                          <th scope="col">Nama Depan</th>
                                          <th scope="col">Nama Belakang</th>
                                          <th class="col-2">Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                        $no = 1;
                                          while($user_data = mysqli_fetch_array($result)){

                                            echo "<tr>";
                                            echo "<td>".$no++."</td>";
                                            echo "<td>".$user_data['username']."</td>";
                                            echo "<td>".$user_data['password']."</td>";
                                            echo "<td>".$user_data['nama_depan']."</td>";
                                            echo "<td>".$user_data['nama_belakang']."</td>";
                                            echo "<td>

                                            <a href='edituser.php?id=$user_data[id]'><button class='btn btn-primary' title='Edit'>
                                            <i class ='fa fa-pen'></i></button></a>
                                            <a href='hapususer.php?id=$user_data[id]' class ='confirmation'><button class='btn btn-danger' title='Hapus'>
                                            <i class ='fa fa-trash'></i></button></a>
                                            </td>
                                            </tr>";
                                          }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
  <!-- Add Modal-->
  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!--s-->
          <form action="" method="POST" name="form1">
            <div class='form-group'>
              <label for='exampleFormControlInput1'>Username</label>
              <input type='text' class='form-control' id='exampleFormControlInput1' name="username" required>
            </div>
            <div class='form-group'>
                <label for='exampleFormControlInput1'>Password</label>
                <input type='password' class='form-control' id='exampleFormControlInput1' name="password" required>
              </div>
              <div class='form-group'>
                <label for='exampleFormControlInput1'>Nama Depan</label>
                <input type='text' class='form-control' id='exampleFormControlInput1' name="nama_depan" required>
              </div>
              <div class='form-group'>
                <label for='exampleFormControlInput1'>Nama Belakang</label>
                <input type='text' class='form-control' id='exampleFormControlInput1' name="nama_belakang" required>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">role</label>
                <select class="form-control" id="exampleFormControlSelect1" name="m_role_id" required>
                    <!-- <option value="">--Pilih--</option>
                  <option value="1">1</option>
                  <option value="2">2</option> -->
                  <?php 
                $result = mysqli_query($mysqli, "SELECT * FROM m_role");
                echo "<option value=''></option>";
                while($user_data = mysqli_fetch_array($result)){
                  echo "<option value='$user_data[id]'>$user_data[id]</option>";
                }
                  ?>
                </select>
              </div>
              <div class='form-footer'>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" name="Submit" value="Add" class="btn btn-primary">Save changes</button>
              </div>
          </form>
        </div>
          <?php
          if(isset($_POST['Submit'])){
            //$id = $_POST['id'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $nama_depan = $_POST['nama_depan'];
            $nama_belakang = $_POST['nama_belakang'];
            $m_role_id = $_POST['m_role_id'];

            //include database connection file
            include('config.php');

            //insert user data into table
            $result = mysqli_query($mysqli, 'INSERT INTO m_user(username, password, nama_depan, nama_belakang, m_role_id) VALUES ("'.$username.'","'.$password.'","'.$nama_depan.'","'.$nama_belakang.'","'.$m_role_id.'")');
            echo "<script>window.location.href='user.php';</script>";
          }
          ?>
        </div>
  </div>
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
                        <span aria-hidden="true">×</span>
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

</body>

</html>