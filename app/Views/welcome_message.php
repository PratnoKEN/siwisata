<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Pariwisata</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        .card {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.html">Pariwisata</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.html">Wisata</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.html">Penginapan</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.html">Transportasi</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= base_url('login'); ?>">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/j3.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Pariwisata</h1>
                        <span class="subheading">Jelajahi Tempat Wisata Kami</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <!-- destinati wisata -->
        <div class="row text-center">
            <div class="col">
                <h3>Destinati Wisata</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 mt-3 justify-content-center">
                <div class="card shadow-sm">
                    <div class="card-body m-3 p-0 rounded">
                        <img src="<?php echo base_url() . '/assets/img/j1.jpg' ?>" width="100%" height="200px" alt="thumbnail">
                    </div>
                    <div class="" style="background-color: #FFF">
                        <hr class="my-0 ">
                        <p class="post mx-3 mt-2 mb-0 "><i class="fa-solid fa-location-dot fa-sm"></i> Batu, Jawa Timur</p>
                        <h6 class="post-title mx-3 mt-2 mb-0 ">Jatim Park 1</h6>
                        <hr class="m-0">
                        <div class="row">
                            <div class="col">
                                <p class="text-success ms-3 my-2 me-lg-4">Rp.100.000</p>
                            </div>
                            <div class="col">
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 justify-content-center">
                <div class="card shadow-sm">
                    <div class="card-body m-3 p-0 rounded">
                        <img src="<?php echo base_url() . '/assets/img/j2.jpg' ?>" width="100%" height="200px" alt="thumbnail">
                    </div>
                    <div class="" style="background-color: #FFF">
                        <hr class="my-0 ">
                        <p class="post mx-3 mt-2 mb-0 "><i class="fa-solid fa-location-dot fa-sm"></i> Batu, Jawa Timur</p>
                        <h6 class="post-title mx-3 mt-2 mb-0 ">Jatim Park 2</h6>
                        <hr class="m-0">
                        <div class="row">
                            <div class="col">
                                <p class="text-success ms-3 my-2 me-lg-4">Rp.100.000</p>
                            </div>

                            <div class="col">
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 justify-content-center">
                <div class="card shadow-sm">
                    <div class="card-body m-3 p-0 rounded">
                        <img src="<?php echo base_url() . '/assets/img/j3.jpg' ?>" width="100%" height="200px" alt="thumbnail">
                    </div>
                    <div class="" style="background-color: #FFF">
                        <hr class="my-0 ">
                        <p class="post mx-3 mt-2 mb-0 "><i class="fa-solid fa-location-dot fa-sm"></i> Surabaya, Jawa Timur</p>
                        <h6 class="post-title mx-3 mt-2 mb-0 ">Kebun Binatang</h6>
                        <hr class="m-0">
                        <div class="row">
                            <div class="col">
                                <p class="text-success ms-3 my-2 me-lg-4">Rp.100.000</p>
                            </div>

                            <div class="col">
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hotel -->
        <div class="row text-center mt-5">
            <div class="col">
                <h3>Penginapan</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 mt-3 justify-content-center">
                <div class="card shadow-sm" >
                    <div class="card-body m-3 p-0 rounded">
                        <img src="<?php echo base_url() . '/assets/img/p1.jpg' ?>" width="100%" height="200px" alt="thumbnail">
                    </div>
                    <div class="" style="background-color: #FFF">
                        <hr class="my-0 ">
                        <p class="post mx-3 mt-2 mb-0 "><i class="fa-solid fa-location-dot fa-sm"></i> Surabaya, Jawa Timur</p>
                        <h6 class="post-title mx-3 mt-2 mb-0 ">Wyndham Hotel</h6>
                        <hr class="m-0">
                        <div class="row">
                            <div class="col">
                                <p class="text-success ms-3 my-2 me-lg-4">Rp.100.000</p>
                            </div>
                            <div class="col">
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 justify-content-center">
                <div class="card shadow-sm">
                    <div class="card-body m-3 p-0 rounded">
                        <img src="<?php echo base_url() . '/assets/img/p2.jpg' ?>" width="100%" height="200px" alt="thumbnail">
                    </div>
                    <div class="" style="background-color: #FFF">
                        <hr class="my-0 ">
                        <p class="post mx-3 mt-2 mb-0 "><i class="fa-solid fa-location-dot fa-sm"></i> Surabaya, Jawa Timur</p>
                        <h6 class="post-title mx-3 mt-2 mb-0 ">Veerwod Hotel</h6>
                        <hr class="m-0">
                        <div class="row">
                            <div class="col">
                                <p class="text-success ms-3 my-2 me-lg-4">Rp.100.000</p>
                            </div>

                            <div class="col">
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 justify-content-center">
                <div class="card shadow-sm">
                    <div class="card-body m-3 p-0 rounded">
                        <img src="<?php echo base_url() . '/assets/img/p3.jpg' ?>" width="100%" height="200px" alt="thumbnail">
                    </div>
                    <div class="" style="background-color: #FFF">
                        <hr class="my-0 ">
                        <p class="post mx-3 mt-2 mb-0 "><i class="fa-solid fa-location-dot fa-sm"></i> Surabaya, Jawa Timur</p>
                        <h6 class="post-title mx-3 mt-2 mb-0 ">Maxone Hotel</h6>
                        <hr class="m-0">
                        <div class="row">
                            <div class="col">
                                <p class="text-success ms-3 my-2 me-lg-4">Rp.100.000</p>
                            </div>

                            <div class="col">
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2023</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>

</html>