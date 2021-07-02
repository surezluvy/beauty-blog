<?php include 'function.php' ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Beauty Skin</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/style.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: black">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Beauty Skin</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#portfolio">Article</a></li>
                        <li class="nav-item"><a class="nav-link" href="#video">Video</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="admin/login.php">Login/Register</a></li>
                    </ul>
                </div>
            </div>
        </nav><br><br><br>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="video">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Video</h2>
                </div>
                <div class="row">
                    <?php
                        $data = read("video", "ORDER BY id_video ASC");
                        while($data2 = mysqli_fetch_array($data)){
                    ?>
                    <div class="col-lg-6 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="embed-responsive embed-responsive-1by1">
                            <iframe style="width: 100%; height: 400px" class="embed-responsive-item" src="<?php echo $data2['url'] ?>"></iframe>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="text-center"><br><a href="index.php" class="btn btn-primary btn-xl text-uppercase">Back to home</a></div>
                            
                </div>
            </div>
        </section>
     
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Beauty Skin 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <?php
            $data = read("artikel", "ORDER BY id_artikel ASC LIMIT 0, 8");
            while($data2 = mysqli_fetch_array($data)){
        ?>
        <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $data2['id_artikel'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"><?php echo $data2['judul'] ?></h2>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/artikel/<?php echo $data2['foto_artikel'] ?>" alt="..." />
                                    <p><?php echo $data2['isi'] ?></p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Tutup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
