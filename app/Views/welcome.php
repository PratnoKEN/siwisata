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
    <!-- Link to Bootstrap JS and jQuery (required for Bootstrap components) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="css/styles.css" rel="stylesheet" />
    <style>
        .card {
            cursor: pointer;
        }
    </style>
</head>

<body class="bg-light">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="<?= base_url('/'); ?>">Pariwisata</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= base_url('/'); ?>">Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="#wisata">Wisata</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="#penginapan">Penginapan</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="#transportasi">Transportasi</a>
                    </li>
                    <?php if (session()->get('logged_in')) : ?>
                        <?php if (session('level') === 'admin') : ?>
                            <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                            <li class="nav-item dropdown mt-3">
                            <a class="nav-link dropdown-toggle align-top" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user"></i> Admin
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?= base_url('logout'); ?>">Logout</a>
                            </div>
                        </li>
                        <?php endif; ?>
                        <?php if (session('level') === 'user') : ?>
                            <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= base_url('dashboard-user'); ?>">Dashboard</a></li>
                            <li class="nav-item dropdown mt-3">
                            <a class="nav-link dropdown-toggle align-top" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user"></i> User
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?= base_url('logout'); ?>">Logout</a>
                            </div>
                        </li>
                        <?php endif; ?>
                        
                    <?php else : ?>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= base_url('login'); ?>">Login</a></li>
                    <?php endif; ?>
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

    <!-- Airplane Ticket Price Calculator -->
    <div class="container mt-5">
        <h3>Cari Tiket Bis</h3>
        <form id="ticketForm" class="mt-4">
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="initialDestination" class="form-label">Dari</label>
                        <select class="form-select" id="initialDestination" required>
                            <option value="" disabled selected>Select initial destination</option>
                            <option value="Batu">Batu</option>
                            <option value="Surabaya">Surabaya</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-1 d-flex align-items-center justify-content-center">
                    <i class="fa-solid fa-arrows-turn-to-dots fa-lg"></i>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="finalDestination" class="form-label">Ke</label>
                        <select class="form-select" id="finalDestination" required>
                            <option value="" disabled selected>Select final destination</option>
                            <option value="Jatim Park 1">Jatim Park 1</option>
                            <option value="Jatim Park 2">Jatim Park 2</option>
                            <option value="Kebun Binatang">Kebun Binatang</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="numberOfPeople" class="form-label">Jumlah Penumpang</label>
                        <input type="number" class="form-control" id="numberOfPeople" min="1" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i> Cari
                Tiket</button>
        </form>
        <div id="ticketPrice" class="mt-4"></div>
    </div>



    <!-- destinati wisata -->
    <div class="container px-4 px-lg-5">
        <div class="row text-center">
            <div class="col">
                <h3 id="wisata">Destinasi Wisata</h1>
            </div>
        </div>
        <div class="row">
        <?php foreach ($produk as $item) : ?>
            <div class="col-md-4 mt-3 justify-content-center">
                <div class="card shadow-sm">
                    <div class="card-body m-3 p-0 rounded">
                        <img src="<?= base_url('assets/img/' . $item['gambar']) ?>" alt="<?= $item['nama_wisata'] ?>" width="100%" height="200px">
                    </div>
                    <div class="" style="background-color: #FFF">
                        <hr class="my-0 ">
                        <p class="post mx-3 mt-2 mb-0 "><i class="text-primary  fa-solid fa-location-dot fa-sm"></i>
                            <?= $item['lokasi'] ?></p>
                        <h6 class="post-title mx-3 mt-2 mb-2 "><?= $item['nama_wisata'] ?></h6>
                        <hr class="m-0">
                        <div class="row">
                            <div class="col">
                                <p class="text-success ms-3 my-2 me-lg-4">Rp.
                                    <?= number_format($item['price'], 0, ',', '.') ?></p>
                            </div>

                            <div class="col text-end me-3">
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-warning"></i>
                                <i class="fa-solid fa-star fa-sm my-3  text-scondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
        
    </div>

    <!-- Footer-->
    <footer class="bg-white">
        <div class="small text-center text-muted fst-italic">Copyright &copy; SI Pariwisata
            <?= date('Y') ?>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>