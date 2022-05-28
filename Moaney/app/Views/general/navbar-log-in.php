<?= $this->extend('layout/template2'); ?>

<?= $this->section('call-css'); ?> 
<link rel="stylesheet" href="./css/navbar-masuk.css">
<link rel="stylesheet" href="./css/utilities.css">
<?= $this->endSection(); ?>

<?= $this->section('content-template2'); ?>
<!-- Navbar -->
<section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-white py-40">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./assets/img/moaney.svg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-lg gap-lg-0 gap-2">
                    <li class="nav-item my-auto">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item my-auto me-lg-20">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item my-auto dropdown d-flex">
                        <div class="vertical-line d-lg-block d-none"></div>
                        <div>
                            <a class="dropdown-toggle ms-lg-40" href="#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="./assets/img/profilePNGG.png" class="rounded-circle" width="40" height="40"
                                    alt="">
                            </a>

                            <ul class="dropdown-menu border-0" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item text-lg color-palette-2" href="#">My Profile</a></li>
                                <li><a class="dropdown-item text-lg color-palette-2" href="#">Wallet</a></li>
                                <li><a class="dropdown-item text-lg color-palette-2" href="#">Account Settings</a>
                                </li>
                                <li><a class="dropdown-item text-lg color-palette-2" href="#">Log Out</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
<?= $this->endSection(); ?>
