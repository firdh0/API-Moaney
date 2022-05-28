<!-- TEMPLATE UNTUK INDEX + BAYAR -->
<?= $this->extend('layout/headHTML'); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="./assets/img/icon.svg">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Custom CSS -->
    <!-- SELALU BERUBAH -->
    <?= $this->renderSection('call-css'); ?>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <title><?= $title; ?></title>
</head>

<body>
    <!-- Navbar -->
    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light bg-white pt-lg-40 pb-lg-40 pt-30 pb-50">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.html">
                    <img src="./assets/img/moaney.svg" alt="" class="rounded mx-auto d-block">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto text-lg gap-lg-0 gap-2">
                        <li class="nav-item my-auto">
                            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item my-auto me-lg-20">
                            <a class="nav-link" href="./member/dashboard.html">Dashboard</a>
                        </li>
                        <li class="nav-item my-auto">
                            <a class="btn btn-sign-in d-flex justify-content-center ms-lg-2 rounded-pill"
                                href="./src/masuk.html" role="button">Masuk</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>


    <?= $this->renderSection('content-template1'); ?>


    <!-- Footer -->
    <section class="footer pt-50">
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 text-lg-start text-center">
                        <a href="" class="mb-30">
                            <img src="./assets/img/icon.svg" alt="">
                        </a>
                        <p class="mt-30 text-lg color-palette-1 mb-30">Moaney memberi kenyamanan, <br>
                            keamanan, dan kecepatan ketika <br> bertransaksi</p>
                        <p class="mt-30 text-lg color-palette-1 mb-30">© 2022 Moaney</p>
                    </div>
                    <div class="col-lg-8 mt-lg-0 mt-20">
                        <div class="row gap-sm-0">
                            <div class="col-md-4 col-6 mb-lg-0 mb-25">
                                <p class="text-lg fw-semibold color-palette-1 mb-12">Kategori</p>
                                <ul class="list-unstyled">
                                    <li class="mb-6">
                                        <a href="" class="text-lg color-palette-1 text-decoration-none">Fiksi</a>
                                    </li>
                                    <li class="mb-6">
                                        <a href="" class="text-lg color-palette-1 text-decoration-none">Horor</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-6 mb-lg-0 mb-25">
                                <p class="text-lg fw-semibold color-palette-1 mb-12">Support</p>
                                <ul class="list-unstyled">
                                    <li class="mb-6">
                                        <a href="" class="text-lg color-palette-1 text-decoration-none">Instagram</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-12 mt-lg-0 mt-md-0 mt-25">
                                <p class="text-lg fw-semibold color-palette-1 mb-12">Connect</p>
                                <ul class="list-unstyled">
                                    <li class="mb-12">
                                        <a href="https://www.its.ac.id/" target="blank"
                                            class="text-lg color-palette-1 text-decoration-none">Institut Teknologi Sepuluh Nopember</a>
                                    </li>
                                    <li class="mb-6">
                                        <p
                                            class="text-lg color-palette-1 text-decoration-none">Surabaya</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!-- AOS Animation -->
    <script>
        AOS.init();
    </script>
</body>

</html>