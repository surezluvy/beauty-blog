<?php 
    session_start(); 
    include '../function.php';
    if(empty($_SESSION)){
        echo "<script>alert('Mohon login dahulu!')</script>";
        echo "<script>location='login.php';</script>";
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

    <title>Beauty Skin - Admin Panel</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Beauty Skin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="../" target="_blank">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Lihat Website</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Daftar Artikel</span></a>
            </li>

            <li class="nav-item active">
                    <a class="nav-link" href="index.php?page=video">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Daftar Video</span></a>
                </li>
                
            <?php
                $username = $_SESSION['username'];
                $data = read("user", "WHERE username='$username'");
                while($data2 = mysqli_fetch_array($data)){
                if($data2['role'] == 1){
            ?>
                
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?page=pengguna">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Daftar Pengguna</span></a>
                </li>
            <?php }} ?>

            <!-- Divider -->
            <!-- <hr class="sidebar-divider"> -->

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Menu
            </div> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Daftar Artikel</span></a>
            </li> -->

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

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username'] ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">
                            <?php
                                if(empty($_GET)){
                                    echo "Artikel";
                                } else if($_GET['page'] == "buat_artikel"){
                                    echo "Buat Artikel";
                                } else if($_GET['page'] == "edit_artikel"){
                                    echo "Edit Artikel";
                                } else if($_GET['page'] == "video"){
                                    echo "Daftar Video";
                                } else if($_GET['page'] == "tambah_video"){
                                    echo "Tambah Video";
                                } else if($_GET['page'] == "edit_video"){
                                    echo "Ubah Video";
                                } else if($_GET['page'] == "pengguna"){
                                    echo "Daftar Pengguna";
                                }
                            ?>
                        </h1>
                        <?php if(empty($_GET)){ ?>
                            <a href="index.php?page=buat_artikel" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Buat artikel</a>
                        <?php } else if($_GET['page'] == "video"){ ?>
                            <a href="index.php?page=tambah_video" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Tambah video</a>
                        <?php } else if($_GET['page'] == "pengguna"){ ?>
                            <a href="index.php?page=tambah_pengguna" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Tambah pengguna</a>
                        <?php } ?>
                    </div>

                    <?php 
                        if(empty($_GET)){
                            include 'template/daftar_artikel.php';
                        } else if($_GET['page'] == "buat_artikel"){
                            include 'template/buat_artikel.php';
                        } else if($_GET['page'] == "edit_artikel"){
                            include 'template/edit_artikel.php';
                        } else if($_GET['page'] == "video"){
                            include 'template/daftar_video.php';
                        } else if($_GET['page'] == "tambah_video"){
                            include 'template/tambah_video.php';
                        } else if($_GET['page'] == "edit_video"){
                            include 'template/edit_video.php';
                        } else if($_GET['page'] == "pengguna"){
                            include 'template/daftar_pengguna.php';
                        } else if($_GET['page'] == "tambah_pengguna"){
                            include 'template/tambah_pengguna.php';
                        } else if($_GET['page'] == "edit_pengguna"){
                            include 'template/edit_pengguna.php';
                        }
                    ?>

                    </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Beauty Skin 2021</span>
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
                    <h5 class="modal-title" id="exampleModalLabel">Ingin logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Silahkan pilih "Logout" dibawah ini, untuk melanjutkan.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="proses.php?status=logout">Logout</a>
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
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>