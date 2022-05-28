<?= $this->extend('layout/template2'); ?>

<?= $this->section('call-css'); ?> 
<link rel="stylesheet" href="./css/utilities.css">
<link rel="stylesheet" href="./css/masuk.css">
<?= $this->endSection(); ?>

<?= $this->section('content-template2'); ?>
<!-- Sign In -->
<section class="sign-in mx-auto">
    <div class="row">
        <div class="col-xxl-5 col-lg-6 my-auto py-lg-0 pt-lg-50 pb-lg-50 pt-30 pb-47 px-0">
            <form action="">
                <div class="container mx-auto">
                    <div class="pb-50">
                        <a class="navbar-brand" href="../index.html">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="60"
                                    height="60">
                                    <circle cx="30" cy="30" r="30" fill="#3546AB" />
                                </mask>
                                <img src="./assets/img/icon.svg" alt="" class="rounded mx-auto d-block">
                            </svg>
                        </a>
                    </div>
                    <h2 class="text-4xl fw-bold color-palette-1 mb-10 text-center">Masuk</h2>
                    <div class="pt-50">
                        <label for="email" class="form-label text-lg fw-medium color-palette-1 mb-10">Alamat Email</label>
                        <input type="email" class="form-control rounded-pill text-lg" id="email" name="email"
                            aria-describedby="email" placeholder="Masukkan alamat email anda">
                    </div>
                    <div class="pt-30">
                        <label for="password"
                            class="form-label text-lg fw-medium color-palette-1 mb-10">Password</label>
                        <input type="password" class="form-control rounded-pill text-lg" id="password"
                            name="password" aria-describedby="password" placeholder="Masukkan password anda">
                    </div>
                    <div class="button-group d-flex flex-column mx-auto pt-50">
                        <a class="btn btn-sign-in fw-medium text-lg text-white rounded-pill mb-16"
                            href="../member/dashboard.html" role="button">Masuk</a>
                        <!-- <button type="submit"
                            class="btn btn-sign-in fw-medium text-lg text-white rounded-pill mb-16"
                            role="button">Continue to Sign In</button> -->
                        <a class="btn btn-sign-up fw-medium text-lg color-palette-1 rounded-pill"
                            href="../src/daftar.html" role="button">Daftar
                        </a>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-xxl-7 col-lg-6 bg-blue text-center pt-lg-145 pb-lg-145 d-lg-block d-none">
            <img src="./assets/img/cover-masuk.png" width="502" height="391.21" class="img-fluid pb-50" alt="">
            <h2 class="text-4xl fw-bold text-white mb-30">Selamat Datang di<br>
                Moaney</h2>
            <p class="text-white m-0">Kami menyediakan semua<br> kebutuhan sampai keinginan kamu</p>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>
