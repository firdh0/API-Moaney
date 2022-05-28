<?= $this->extend('layout/template2'); ?>

<?= $this->section('call-css'); ?> 
<link rel="stylesheet" href="./css/utilities.css">
<link rel="stylesheet" href="./css/daftar.css">
<?= $this->endSection(); ?>

<?= $this->section('content-template2'); ?>
<!-- Sign Up -->
<section class="sign-up mx-auto pt-lg-100 pb-lg-100 pt-30 pb-47">
    <div class="container mx-auto">
        <form action="">
            <div class="pb-50">
                <a class="navbar-brand" href="../index.html">
                    <img src="./assets/img/icon.svg" alt="" class="rounded mx-auto d-block">
                </a>
            </div>
            <h2 class="text-4xl fw-bold color-palette-1 mb-10 text-center">Daftar</h2>
            <p class="text-lg color-palette-1 m-0 text-center">Daftar dan bergabung dengan kami</p>
            <div class="pt-50">
                <label for="name" class="form-label text-lg fw-medium color-palette-1 mb-10">Nama Lengkap</label>
                <input type="text" class="form-control rounded-pill text-lg" id="name" name="name"
                    aria-describedby="name" placeholder="Masukkan nama anda">
            </div>
            <div class="pt-30">
                <label for="email" class="form-label text-lg fw-medium color-palette-1 mb-10">Alamat Email</label>
                <input type="email" class="form-control rounded-pill text-lg" id="email" name="email"
                    aria-describedby="email" placeholder="Masukkan alamat email anda">
            </div>
            <div class="pt-30">
                <label for="password" class="form-label text-lg fw-medium color-palette-1 mb-10">Password</label>
                <input type="password" class="form-control rounded-pill text-lg" id="password" name="password"
                    aria-describedby="password" placeholder="Masukkan password anda">
            </div>
            <div class="button-group d-flex flex-column mx-auto pt-50">
                <a class="btn btn-sign-up fw-medium text-lg text-white rounded-pill mb-16"
                    href="../src/daftar-sukses.html" role="button">Lanjutkan</a>
            </div>
        </form>
    </div>
</section>
<?= $this->endSection(); ?>