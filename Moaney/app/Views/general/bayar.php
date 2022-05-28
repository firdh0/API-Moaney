<?= $this->extend('layout/template1'); ?>

<?= $this->section('call-css'); ?> 
<link rel="stylesheet" href="./css/homepage.css">
<link rel="stylesheet" href="./css/utilities.css">
<link rel="stylesheet" href="./css/detail.css">
<?= $this->endSection(); ?>

<?= $this->section('content-template1'); ?>
<!-- Detail Content -->
<section class="detail pt-lg-60 pb-50">
    <div class="container-xxl container-fluid">
        <div class="detail-header pb-50">
            <h2 class="text-4xl fw-bold color-palette-1 text-start mb-10">Bayar</h2>
            <p class="text-lg color-palette-1 mb-0">Nikmati Pengalaman Berbayar Baru</p>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5 pb-30 pb-md-0 pe-md-25 text-md-start">
                <div class="row align-items-center">
                    <div class="col-md-12 col-4">
                        <img src="./assets/img/item.png" width="280" height="380" class="img-fluid" alt="">
                    </div>
                    <!-- Mobile: Game title -->
                    <div class="col-md-12 col-8 d-md-none d-block">
                        <h2 class="text-xl fw-bold color-palette-1 text-start mb-10">Nama<br>
                            Produk</h2>
                        <p class="text-sm color-palette-2 text-start mb-0">Kategori</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-7 ps-md-25">
                <!-- Desktop: Game title -->
                <div class="pb-50 d-md-block d-none">
                    <h2 class="text-4xl fw-bold color-palette-1 text-start mb-10 mt-10">Nama<br>
                        Produk</h2>
                    <p class="text-lg color-palette-2 mb-0">Kategori</p>
                </div>
                <hr>
                <form action="./checkout.html" method="POST">
                    <div class="pt-md-50 pt-30">
                        <div class="">
                            <label for="ID" class="form-label text-lg fw-medium color-palette-1 mb-10">Harga</label>
                            <p class="text-3xl color-palette-1 m-0"><span class="fw-medium">Rp. 10.000
                            </p>
                        </div>
                    </div>
                    <div class="pt-md-50 pb-md-50 pt-30 pb-20">
                        <p class="text-lg fw-medium color-palette-1 mb-md-10 mb-0">Tipe API</p>
                        <div class="row justify-content-between">
                            <label class="col-lg-4 col-sm-6 ps-md-15 pe-md-15 pt-md-15 pb-md-15 pt-10 pb-10"
                                for="topup1">
                                <input class="d-none" type="radio" id="topup1" name="topup" value="topup1">
                                <div class="detail-card">
                                    <div class="d-flex justify-content-between">
                                        <p class="text-3xl color-palette-1 m-0"><span class="fw-medium">Moaney
                                        </p>
                                        <svg id="icon-check" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10" cy="10" r="10" fill="#CDF1FF" />
                                            <path d="M5.83301 10L8.46459 12.5L14.1663 7.5" stroke="#00BAFF"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                            </label>
                            <label class="col-lg-4 col-sm-6 ps-md-15 pe-md-15 pt-md-15 pb-md-15 pt-10 pb-10"
                                for="topup2">
                                <input class="d-none" type="radio" id="topup2" name="topup" value="topup2">
                                <div class="detail-card">
                                    <div class="d-flex justify-content-between">
                                        <p class="text-3xl color-palette-1 m-0"><span class="fw-medium">Blabla
                                        </p>
                                        <svg id="icon-check" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10" cy="10" r="10" fill="#CDF1FF" />
                                            <path d="M5.83301 10L8.46459 12.5L14.1663 7.5" stroke="#00BAFF"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                            </label>
                            <label class="col-lg-4 col-sm-6 ps-md-15 pe-md-15 pt-md-15 pb-md-15 pt-10 pb-10"
                                for="topup3">
                                <input class="d-none" type="radio" id="topup3" name="topup" value="topup3">
                                <div class="detail-card">
                                    <div class="d-flex justify-content-between">
                                        <p class="text-3xl color-palette-1 m-0"><span class="fw-medium">Blabla
                                        </p>
                                        <svg id="icon-check" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10" cy="10" r="10" fill="#CDF1FF" />
                                            <path d="M5.83301 10L8.46459 12.5L14.1663 7.5" stroke="#00BAFF"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                            </label>
                            <label class="col-lg-4 col-sm-6 ps-md-15 pe-md-15 pt-md-15 pb-md-15 pt-10 pb-10"
                                for="topup4">
                                <input class="d-none" type="radio" id="topup4" name="topup" value="topup4">
                                <div class="detail-card">
                                    <div class="d-flex justify-content-between">
                                        <p class="text-3xl color-palette-1 m-0"><span class="fw-medium">Blabla
                                        </p>
                                        <svg id="icon-check" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10" cy="10" r="10" fill="#CDF1FF" />
                                            <path d="M5.83301 10L8.46459 12.5L14.1663 7.5" stroke="#00BAFF"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                            </label>
                            <div class="col-lg-4 col-sm-6">
                                <!-- Blank -->
                            </div>
                        </div>
                    </div>
                    <div class="d-sm-block d-flex flex-column w-100">
                        <a href="../src/transaksi-sukses.html" type="submit"
                            class="btn btn-submit rounded-pill fw-medium text-white border-0 text-lg">Lanjut</a>
                        <!-- <button type="submit"
                            class="btn btn-submit rounded-pill fw-medium text-white border-0 text-lg">Continue</button> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>
   