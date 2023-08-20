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
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <!-- Link to Bootstrap JS and jQuery (required for Bootstrap components) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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
                    <?php if (session()->get('logged_in')): ?>
                        <?php if (session('level') === 'admin'): ?>
                            <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                                    href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                        <?php endif; ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle align-top" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?= base_url('logout'); ?>">Logout</a>
                            </div>
                        </li>
                    <?php else: ?>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                                href="<?= base_url('login'); ?>">Login</a></li>
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

    <!--modal-->
    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <!-- Modal content goes here -->
            </div>
        </div>
    </div>

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
        <div class="row justify-content-center">
            <div class="col-md-4 mt-3 justify-content-center">
                <div class="card shadow-sm">
                    <div class="card-body m-3 p-0 rounded">
                        <img src="<?php echo base_url() . '/assets/img/j1.jpg' ?>" width="100%" height="200px"
                            alt="thumbnail">
                    </div>
                    <div class="" style="background-color: #FFF">
                        <hr class="my-0 ">
                        <p class="post mx-3 mt-2 mb-0 "><i class="text-primary fa-solid fa-location-dot fa-sm"></i>
                            Batu, Jawa Timur</p>
                        <h6 class="post-title mx-3 mt-2 mb-2 ">Jatim Park 1</h6>
                        <hr class="m-0">
                        <div class="row">
                            <div class="col">
                                <p class="text-success ms-3 my-2 me-lg-4">Rp.100.000</p>
                            </div>
                            <div class="col text-end me-3">
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
                        <img src="<?php echo base_url() . '/assets/img/j2.jpg' ?>" width="100%" height="200px"
                            alt="thumbnail">
                    </div>
                    <div class="" style="background-color: #FFF">
                        <hr class="my-0 ">
                        <p class="post mx-3 mt-2 mb-0 "><i class="text-primary  fa-solid fa-location-dot fa-sm"></i>
                            Batu, Jawa Timur</p>
                        <h6 class="post-title mx-3 mt-2 mb-2 ">Jatim Park 2</h6>
                        <hr class="m-0">
                        <div class="row">
                            <div class="col">
                                <p class="text-success ms-3 my-2 me-lg-4">Rp.100.000</p>
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
            <div class="col-md-4 mt-3 justify-content-center">
                <div class="card shadow-sm">
                    <div class="card-body m-3 p-0 rounded">
                        <img src="<?php echo base_url() . '/assets/img/j3.jpg' ?>" width="100%" height="200px"
                            alt="thumbnail">
                    </div>
                    <div class="" style="background-color: #FFF">
                        <hr class="my-0 ">
                        <p class="post mx-3 mt-2 mb-0 "><i class="text-primary fa-solid fa-location-dot fa-sm"></i>
                            Surabaya, Jawa Timur</p>
                        <h6 class="post-title mx-3 mt-2 mb-2 ">Kebun Binatang</h6>
                        <hr class="m-0">
                        <div class="row">
                            <div class="col">
                                <p class="text-success ms-3 my-2 me-lg-4">Rp.100.000</p>
                            </div>

                            <div class="col text-end me-3">
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
        <footer class="bg-white">
            <div class="small text-center text-muted fst-italic">Copyright &copy; SI Pariwisata
                <?= date('Y') ?>
            </div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const ticketForm = document.getElementById("ticketForm");
                const ticketPriceElement = document.getElementById("ticketPrice");

                ticketForm.addEventListener("submit", function (event) {
                    event.preventDefault();

                    const initialDestination = document.getElementById("initialDestination").value;
                    const finalDestination = document.getElementById("finalDestination").value;
                    const numberOfPeople = parseInt(document.getElementById("numberOfPeople").value);

                    // Calculate ticket price based on destinations (example logic)
                    let ticketPrice = 0;
                    if (initialDestination === "Batu" && finalDestination === "Jatim Park 1") {
                        ticketPrice = 100000;
                    } else if (initialDestination === "Batu" && finalDestination === "Jatim Park 2") {
                        ticketPrice = 120000;
                    } else if (initialDestination === "Batu" && finalDestination === "Kebun Binatang") {
                        ticketPrice = 150000;
                    } else if (initialDestination === "Surabaya" && finalDestination === "Jatim Park 1") {
                        ticketPrice = 120000;
                    } else if (initialDestination === "Surabaya" && finalDestination === "Jatim Park 2") {
                        ticketPrice = 140000;
                    } else if (initialDestination === "Surabaya" && finalDestination === "Kebun Binatang") {
                        ticketPrice = 160000;
                    }
                    const totalPrice = ticketPrice * numberOfPeople;

                    ticketPriceElement.innerHTML = `Ticket Price for ${numberOfPeople} people: Rp. ${totalPrice}`;
                });
            });
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const productCards = document.querySelectorAll(".card.shadow-sm");

                const hotels = {
                    "Jatim Park 1": [{
                        name: "Hotel Dewi",
                        description: "A comfortable hotel near Jatim Park 1",
                        price: "Rp. 250,000",
                        specifications: "WiFi, Breakfast, Parking",
                        image: "oyo"
                    },
                    {
                        name: "OYO 3398 Griya RM 19",
                        description: "Affordable accommodation with great service",
                        price: "Rp. 150,000",
                        specifications: "WiFi, Air Conditioning",
                        image: "oyo"
                    },
                    {
                        name: "OYO 2042 Zam Zam Family Syariah",
                        description: "Family-friendly hotel with a peaceful atmosphere",
                        price: "Rp. 180,000",
                        specifications: "WiFi, Family Rooms",
                        image: "oyo"
                    }
                    ],
                    "Jatim Park 2": [{
                        name: "RedDoorz near Eco Green Park Batu",
                        description: "Conveniently located near Jatim Park 2",
                        price: "Rp. 300,000",
                        specifications: "WiFi, Swimming Pool",
                        image: "oyo"
                    },
                    {
                        name: "GUEST HOUSE PALEM ASRI",
                        description: "Homestay with a natural atmosphere",
                        price: "Rp. 200,000",
                        specifications: "Garden, Parking",
                        image: "oyo"
                    },
                    {
                        name: "Griya Sumber Rejeki Homestay",
                        description: "Cozy homestay with friendly hosts",
                        price: "Rp. 180,000",
                        specifications: "WiFi, Terrace",
                        image: "oyo"
                    }
                    ],
                    "Kebun Binatang": [{
                        name: "Andalus Hotel",
                        description: "Modern hotel near Kebun Binatang",
                        price: "Rp. 300,000",
                        specifications: "WiFi, Restaurant, Gym",
                        image: "oyo"
                    },
                    {
                        name: "SPOT ON 90403 Gosepa Ngagel",
                        description: "Budget-friendly accommodation",
                        price: "Rp. 150,000",
                        specifications: "WiFi, Air Conditioning",
                        image: "oyo2"
                    },
                    {
                        name: "style50 homestay",
                        description: "Homestay with a stylish touch",
                        price: "Rp. 220,000",
                        specifications: "WiFi, Terrace",
                        image: "oyo"
                    }
                    ]
                };

                const biss = {
                    "Jatim Park 1": [{
                        name: "Bus Gandeng Scania",
                        description: "Bus yang melayani rute antarkota di Indonesia, khususnya di Malang",
                        price: "Rp. 250,000",
                        specifications: "AC, Tempat duduk yang nyaman, Layar hiburan",
                        image: "b1"
                    },
                    {
                        name: "Bus Hino",
                        description: "Bus yang melayani rute antarkota di Indonesia, khususnya di Malang",
                        price: "Rp. 150,000",
                        specifications: "WiFi, AC, Tempat duduk yang nyaman, Layar hiburan",
                        image: "b2"
                    },
                    {
                        name: "Bus Mercedez-Ben",
                        description: "Bus yang melayani rute antarkota di Indonesia, khususnya di Malang",
                        price: "Rp. 180,000",
                        specifications: "WiFi, AC, Tempat duduk yang nyaman, Layar hiburan",
                        image: "b3"
                    }
                    ],
                    "Jatim Park 2": [{
                        name: "Bus Sinar Jaya",
                        description: "Bus yang melayani rute antarkota di Indonesia, khususnya di Malang",
                        price: "Rp. 300,000",
                        specifications: "WiFi, AC, Tempat duduk yang nyaman, Layar hiburan",
                        image: "b1"
                    },
                    {
                        name: "Bus Haryanto",
                        description: "Bus yang melayani rute antarkota di Indonesia, khususnya di Malang",
                        price: "Rp. 200,000",
                        specifications: "AC, Tempat duduk yang nyaman, Layar hiburan",
                        image: "b2"
                    },
                    {
                        name: "Bus Damri",
                        description: "Bus yang melayani rute antarkota di Indonesia, khususnya di Malang",
                        price: "Rp. 180,000",
                        specifications: "WiFi, AC, Tempat duduk yang nyaman, Layar hiburan",
                        image: "b2"
                    }
                    ],
                    "Kebun Binatang": [{
                        name: "Bus Mayasari Bakti",
                        description: "Bus yang melayani rute antarkota di Indonesia, khususnya di Surabaya",
                        price: "Rp. 300,000",
                        specifications: "AC, Tempat duduk yang nyaman, Layar hiburan",
                        image: "b1"
                    },
                    {
                        name: "Bus Pahala Kencana",
                        description: "Bus yang melayani rute antarkota di Indonesia, khususnya di Surabaya",
                        price: "Rp. 150,000",
                        specifications: "AC, Tempat duduk yang nyaman, Layar hiburan",
                        image: "b2"
                    },
                    {
                        name: "Bus Putra Pelangi",
                        description: "Bus yang melayani rute antarkota di Indonesia, khususnya di Surabaya",
                        price: "Rp. 220,000",
                        specifications: "AC, Tempat duduk yang ergonomis, Hiburan, Colokan listrik.",
                        image: "b3"
                    }
                    ]
                };

                productCards.forEach((card, index) => {
                    card.addEventListener("click", () => {
                        const cardTitle = card.querySelector(".post-title").textContent;
                        const cardPrice = card.querySelector(".text-success").textContent;

                        const selectedFinalDestination = cardTitle;
                        const recommendedHotels = hotels[selectedFinalDestination];

                        const recommendedBiss = biss[selectedFinalDestination];

                        const hotelCards = recommendedHotels.map(hotel => `

<div class="card" style="width: 18rem;">
<div class="row g-0">
    <img class="" src="<?php echo base_url() . '/assets/img/' ?>${hotel.image}.jpg" alt="${hotel.name}">
    </div>
    <div class="card-body">
      <h5 class="card-title">${hotel.name}</h5>
        <p class="card-text">${hotel.description}</p>
        <p class="card-text text-success">${hotel.price}</p>
        <p class="card-text">${hotel.specifications}</p>
      </div>
</div>

`).join('<p class="m-1"></p>');

                        //bis
                        const bisCards = recommendedBiss.map(bis => `
<div class="card" style="width: 18rem;">
<div class="row g-0">
    <img class="" width="100%" height="200px"  src="<?php echo base_url() . '/assets/img/' ?>${bis.image}.jpg" alt="${bis.name}">
    </div>
    <div class="card-body">
      <h5 class="card-title">${bis.name}</h5>
        <p class="card-text">${bis.description}</p>
        <p class="card-text text-success">${bis.price}</p>
        <p class="card-text">${bis.specifications}</p>
      </div>
</div>

`).join('<p class="m-1"></p>');

                        const modalContent = `
                        <div class="modal-header">
                            <h5 class="modal-title" id="productModalLabel">${cardTitle}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
    <div class="row">
      <div class="col-md-6">
        <img src="<?php echo base_url() . '/assets/img/j${index + 1}.jpg' ?>" width="100%" alt="thumbnail">
      </div>
      <div class="col-md-6">
        <h6 class="post-title mt-2 mb-2">${cardTitle}</h6>
        <p class="text-success mb-0 small">Harga Tiket Masuk</p>
        <p class="text-success">${cardPrice}</p>
        <hr class="my-2">
        <h6 class="mt-2">Recommended Hotels:</h6>
        <div class="row">
  <div class="col-sm-12">
    <div class="card-container d-flex flex-nowrap">
      ${hotelCards}
    </div>
  </div>
</div>
<hr class="my-2">
        <h6 class="mt-2">Recommended Bus:</h6>
<div class="row">
  <div class="col-sm-12">
    <div class="card-container d-flex flex-nowrap">
      ${bisCards}
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Bayar</button>
                        </div>
                        `;
                        const modal = document.querySelector("#productModal .modal-content");
                        modal.innerHTML = modalContent;

                        // Show the modal
                        const productModal = new bootstrap.Modal(document.getElementById("productModal"));
                        productModal.show();
                    });
                });
            });
        </script>
</body>

</html>