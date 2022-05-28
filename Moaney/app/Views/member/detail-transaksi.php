<?= $this->extend('layout/template2'); ?>

<?= $this->section('call-css'); ?> 
<link rel="stylesheet" href="./css/utilities.css" />
<link rel="stylesheet" href="./css/sidebar.css">
<link rel="stylesheet" href="./css/detail-transaksi.css" />
<?= $this->endSection(); ?>

<?= $this->section('content-template2'); ?>
    <!-- Transactions Detail -->
    <section class="transactions-detail overflow-auto">
        <?= $this->include('layout/profile') ?>
        <?= $this->include('layout/menu2') ?>
            </div>
        </section>
        <main class="main-wrapper">
            <div class="ps-lg-0">
                <h2 class="text-4xl fw-bold color-palette-1 mb-30">Detail #12312213 <span
                    class="purchase-back"><a href="../member/riwayat.html">
                        <img src="./assets/img/back.svg" alt="" href="../member/riwayat.html">
                </a></span></h2>
                <div class="details">
                    <div class="main-content main-content-card overflow-auto">
                        <section class="checkout mx-auto">
                            <div class="d-flex flex-row  align-items-center justify-content-between mb-30">
                                <div class="game-checkout d-flex flex-row align-items-center">
                                    <div class="pe-4">
                                        <div class="cropped">
                                            <img src="./assets/img/topup.svg" width="200" height="130"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="fw-bold text-xl color-palette-1 mb-10">Top Up</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="purchase pt-30">
                                <h2 class="fw-bold text-xl color-palette-1 mb-20">Detail Transaksi</h2>
                                <p class="text-lg color-palette-1 mb-20">ID Transaksi <span
                                        class="purchase-details">#12312213</span></p>
                                <p class="text-lg color-palette-1 mb-20">Nama Pengirim <span
                                        class="purchase-details">Muhammad Firdho Kustiawan</span></p>
                                <p class="text-lg color-palette-1 mb-20">Rekening Penerima <span 
                                        class="purchase-details">1234567890</span></p>
                                <p class="text-lg color-palette-1 mb-20">Rekening Tujuan <span 
                                        class="purchase-details">0987654321</span></p>
                                <p class="text-lg color-palette-1 mb-20">Waktu <span 
                                        class="purchase-details">12 April 2022 13:01:32</span></p>
                                <p class="text-lg color-palette-1 mb-20">Tipe API <span 
                                        class="purchase-details">Moaney</span></p>
                                <p class="text-lg color-palette-1 mb-20">Total <span 
                                        class="purchase-details">Rp. 10.000.000</span></p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>
    </section>
<?= $this->endSection(); ?>