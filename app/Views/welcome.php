<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi Wisata</title>
    <!-- Link to Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/d14eb4453a.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card {
            height: 100%;
            cursor: pointer;
        }

        .card-price {
            color: orange;
        }

        .custom-card-img {
            height: 200px;
            /* Set the desired height for the card images */
        }
    </style>
</head>

<body class="bg-light">
    <div class="container mt-5">

        <div id="carouselExample" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url('asset-client'); ?>/gambar/Kebun-Binatang-Surabaya.jpg" class="d-block w-100"
                        alt="Carousel Image 1">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('asset-client'); ?>/gambar/j1.jpg" class="d-block w-100"
                        alt="Carousel Image 2">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('asset-client'); ?>/gambar/Kenjeran.jpg" class="d-block w-100"
                        alt="Carousel Image 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <h2>Destinasi Wisata</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card mb-4 shadow-sm" onclick="showDetail(this)">
                    <img src="<?= base_url('asset-client'); ?>/gambar/Kebun-Binatang-Surabaya.jpg"
                        class="card-img-top custom-card-img" alt="Destinasi Wisata 1">
                    <div class="card-body">
                        <h6 class="card-maps"><i class="fa-solid fa-location-dot"></i> Wonokromo - Surabaya, Jawa Timur
                        </h6>
                        <h5 class="card-title">Kebun Binatang Surabaya</h5>
                        <p class="card-price">Rp.15000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card mb-4 shadow-sm" onclick="showDetail(this)">
                    <img src="<?= base_url('asset-client'); ?>/gambar/j1.jpg" class="card-img-top custom-card-img"
                        alt="Destinasi Wisata 1">
                    <div class="card-body">
                        <h6 class="card-maps"><i class="fa-solid fa-location-dot"></i> Sisir - Batu, Jawa Timur
                        </h6>
                        <h5 class="card-title">Jatim Park 1</h5>
                        <p class="card-price">Rp.100000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card mb-4 shadow-sm" onclick="showDetail(this)">
                    <img src="<?= base_url('asset-client'); ?>/gambar/j2.jpg" class="card-img-top custom-card-img"
                        alt="Destinasi Wisata 1">
                    <div class="card-body">
                        <h6 class="card-maps"><i class="fa-solid fa-location-dot"></i> Oro-Oro Ombo - Batu, Jawa
                            Timur
                        </h6>
                        <h5 class="card-title">Jatim Park 2</h5>
                        <p class="card-price">Rp.100000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card mb-4 shadow-sm" onclick="showDetail(this)">
                    <img src="<?= base_url('asset-client'); ?>/gambar/j3.jpg" class="card-img-top custom-card-img"
                        alt="Destinasi Wisata 1">
                    <div class="card-body">
                        <h6 class="card-maps"><i class="fa-solid fa-location-dot"></i> Junrejo - Batu, Jawa Timur
                        </h6>
                        <h5 class="card-title">Jatim Park 3</h5>
                        <p class="card-price">Rp.100000</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card mb-4 shadow-sm" onclick="showDetail(this)">
                    <img src="<?= base_url('asset-client'); ?>/gambar/Kenjeran.jpg" class="card-img-top custom-card-img"
                        alt="Destinasi Wisata 1">
                    <div class="card-body">
                        <h6 class="card-maps"><i class="fa-solid fa-location-dot"></i> Bulak - Surabaya, Jawa Timur
                        </h6>
                        <h5 class="card-title">Pantai Kenjeran</h5>
                        <p class="card-price">Rp.15000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Detail Wisata</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="detailContent">
                    <img src="" class="card-img-top" alt="Destination Image" id="destinationImage">
                    <h5 id="destinationTitle"></h5>
                    <p id="destinationText"></p>
                    <!-- Add this line for the image -->
                    <button id="bookButton" class="btn btn-primary">Book Now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Link to Bootstrap JS and jQuery (required for Bootstrap components) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function showDetail(card) {
            const title = card.querySelector('.card-title').textContent;
            const price = card.querySelector('.card-price').textContent;
            const imageSrc = card.querySelector('.custom-card-img').getAttribute('src'); // Get the image source

            const staticBackdrop = document.getElementById('staticBackdrop');
            const detailContent = document.getElementById('detailContent');
            const destinationTitle = document.getElementById('destinationTitle');
            const destinationText = document.getElementById('destinationText');
            const destinationImage = document.getElementById('destinationImage'); // Get the image element
            const bookButton = document.getElementById('bookButton');

            destinationTitle.textContent = title;
            destinationText.textContent = `Price: ${price}`;
            destinationImage.src = imageSrc; // Set the image source

            bookButton.addEventListener('click', () => {
                alert(`Booking for ${title} is not implemented yet.`);
            });

            $('#staticBackdrop').modal('show');
        }
    </script>
</body>

</html>