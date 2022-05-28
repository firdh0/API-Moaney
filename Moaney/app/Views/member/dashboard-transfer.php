<?= $this->extend('layout/template2'); ?>

<?= $this->section('call-css'); ?> 
<link rel="stylesheet" href="./css/utilities.css" />
<link rel="stylesheet" href="./css/sidebar.css">
<link rel="stylesheet" href="./css/dashboard.css" />
<link rel="stylesheet" href="./css/detail-ds-topup.css">
<link rel="stylesheet" href="./css/masuk.css">
<?= $this->endSection(); ?>

<?= $this->section('content-template2'); ?>
    <!-- Overview -->
    <section class="overview overflow-auto">
        <?= $this->include('layout/profile') ?>
        <?= $this->include('layout/menu') ?>        
            </div>
        </section>
        <main class="main-wrapper">
            <section class="detail pt-lg-0 pb-50">
                <div class="ps-lg-0">
                    <h2 class="text-4xl fw-bold color-palette-1 mb-30">Dashboard - Transfer <span
                        class="purchase-back"><a href="./dashboard.html">
                            <img src="./assets/img/back.svg" alt="" href="../member/dashboard-topup.html">
                    </a></span></h2>
                    <div class="top-up-categories mb-30">
                        <div class="main-content">
                            <div class="row">
                                <form action="./checkout.html" method="POST">
                                    <div class="col-xxl-5 col-lg-6 my-auto py-lg-0 pt-lg-20 pb-lg-50 pt-10 pb-47 px-0">
                                        <div class="categories-card">
                                            <div class="pt-0">
                                                <label for="rekeningtujuan" class="form-label text-lg fw-medium color-palette-1 mb-10">No. Rekening Tujuan</label>
                                                <input type="none" class="form-control rounded-pill text-lg" id="rekeningtujuan" name="rekeningtujuan"
                                                    aria-describedby="totaltransfer" placeholder="Masukkan no rekening tujuan">
                                            </div>
                                            <div class="pt-30">
                                                <label for="totaltransfer"
                                                    class="form-label text-lg fw-medium color-palette-1 mb-10">Total</label>
                                                <input type="password" class="form-control rounded-pill text-lg" id="totaltransfer"
                                                    name="totaltransfer" aria-describedby="totaltransfer" placeholder="Masukkan total transfer">
                                            </div>
                                        </div>
                                        </div>
                                            
                                    </div>
                                    <div class="pt-md-30 pb-md-50 pt-50 pb-20">
                                        <p class="text-lg fw-medium color-palette-1 mb-md-10 mb-0">Tipe API</p>
                                        <div class="row justify-content-between">
                                            <label class="col-lg-4 col-sm-6 ps-md-15 pe-md-15 pt-md-15 pb-md-15 pt-10 pb-10"
                                                for="api1">
                                                <input class="d-none" type="radio" id="api1" name="api" value="api1">
                                                <div class="detail-card2">
                                                    <div class="d-flex justify-content-between">
                                                        <p class="text-2xl color-palette-1 fw-medium m-0"><span class="fw-medium">Moaney
                                                        </p>
                                                        <svg id="icon-check2" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="10" cy="10" r="10" fill="#CDF1FF" />
                                                            <path d="M5.83301 10L8.46459 12.5L14.1663 7.5" stroke="#00BAFF"
                                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </label>
                                            <label class="col-lg-4 col-sm-6 ps-md-15 pe-md-15 pt-md-15 pb-md-15 pt-10 pb-10"
                                                for="api2">
                                                <input class="d-none" type="radio" id="api2" name="api" value="api2">
                                                <div class="detail-card2">
                                                    <div class="d-flex justify-content-between">
                                                        <p class="text-2xl color-palette-1 m-0"><span class="fw-medium">Lorem
                                                        </p>
                                                        <svg id="icon-check2" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="10" cy="10" r="10" fill="#CDF1FF" />
                                                            <path d="M5.83301 10L8.46459 12.5L14.1663 7.5" stroke="#00BAFF"
                                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </label>
                                            <label class="col-lg-4 col-sm-6 ps-md-15 pe-md-15 pt-md-15 pb-md-15 pt-10 pb-10"
                                                for="api3">
                                                <input class="d-none" type="radio" id="api3" name="api" value="api3">
                                                <div class="detail-card2">
                                                    <div class="d-flex justify-content-between">
                                                        <p class="text-2xl color-palette-1 m-0"><span class="fw-medium">Lorem
                                                        </p>
                                                        <svg id="icon-check2" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="10" cy="10" r="10" fill="#CDF1FF" />
                                                            <path d="M5.83301 10L8.46459 12.5L14.1663 7.5" stroke="#00BAFF"
                                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </label>
                                            <label class="col-lg-4 col-sm-6 ps-md-15 pe-md-15 pt-md-15 pb-md-15 pt-10 pb-10"
                                                for="api4">
                                                <input class="d-none" type="radio" id="api4" name="api" value="api4">
                                                <div class="detail-card2">
                                                    <div class="d-flex justify-content-between">
                                                        <p class="text-2xl color-palette-1 m-0"><span class="fw-medium">Lorem
                                                        </p>
                                                        <svg id="icon-check2" width="20" height="20" viewBox="0 0 20 20" fill="none"
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
                                            <div class="d-sm-block d-flex flex-column w-100 pt-50">
                                                <a href="../src/transaksi-sukses-db.html" type="submit"
                                                    class="btn btn-submit rounded-pill fw-medium text-white border-0 text-lg">Lanjut</a>
                                                <!-- <button type="submit"
                                                    class="btn btn-submit rounded-pill fw-medium text-white border-0 text-lg">Continue</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </section>
<?= $this->endSection(); ?>