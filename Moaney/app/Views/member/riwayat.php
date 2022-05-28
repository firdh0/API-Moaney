<?= $this->extend('layout/template2'); ?>

<?= $this->section('call-css'); ?> 
<link rel="stylesheet" href="./css/utilities.css" />
<link rel="stylesheet" href="./css/sidebar.css">
<link rel="stylesheet" href="./css/transaksi.css" />
<?= $this->endSection(); ?>

<?= $this->section('content-template2'); ?>
    <!-- Transactions -->
    <section class="transactions overflow-auto">
        <?= $this->include('layout/profile') ?>
        <?= $this->include('layout/menu2') ?> 
            </div>
        </section>
        <main class="main-wrapper">
            <div class="ps-lg-0">
                <h2 class="text-4xl fw-bold color-palette-1 mb-30">Riwayat Transaksi</h2>
                <div class="mb-30">
                    <p class="text-lg color-palette-2 mb-12">Total Transaksi</p>
                    <h3 class="text-5xl fw-medium color-palette-1">Rp 4.518.000.500</h3>
                </div>
                <div class="row mt-30 mb-20">
                    <div class="col-lg-12 col-12 main-content">
                        <div id="list_status_title">
                            <a data-filter="*" href="#" class="btn btn-status rounded-pill text-sm btn-active me-3">Semua</a>
                            <a data-filter="topup" href="#"
                                class="btn btn-status rounded-pill text-sm me-3">Top Up</a>
                            <a data-filter="transfer" href="#"
                                class="btn btn-status rounded-pill text-sm me-3">Transfer</a>
                            <a data-filter="bayar" href="#" class="btn btn-status rounded-pill text-sm me-3">Bayar</a>
                        </div>
                    </div>
                </div>
                <div class="latest-transaction">
                    <div class="main-content main-content-table overflow-auto">
                        <table class="table table-borderless">
                            <thead>
                                <tr class="color-palette-1">
                                    <th class="" scope="col">Jenis Transaksi</th>
                                    <th scope="col">Waktu</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody id="list_status_item">
                                <tr data-category="topup" class="align-middle">
                                    <th scope="row">
                                        <img class="float-start me-3 mb-lg-0 mb-3" src="./assets/img/topup.svg"
                                            width="80" height="60" alt="">
                                        <div class="game-title-header">
                                            <p class="game-title fw-medium text-start color-palette-1 m-0">Top Up</p>
                                        </div>
                                    </th>
                                    <td>
                                        <p class="fw-medium text-start color-palette-1 m-0">12 April 2022</p>
                                        <p class="text-xs fw-normal text-start color-palette-2 m-0">12:06</p>
                                    </td>
                                    <td>
                                        <p class="fw-medium color-palette-1 m-0">Rp 290.000</p>
                                    </td>
                                    <td>
                                        <a href="../member/detail-transaksi.html"
                                            class="btn btn-status rounded-pill text-sm">Details</a>
                                    </td>
                                </tr>
                                <tr data-category="topup" class="align-middle">
                                    <th scope="row">
                                        <img class="float-start me-3 mb-lg-0 mb-3" src="./assets/img/topup.svg"
                                            width="80" height="60" alt="">
                                        <div class="game-title-header">
                                            <p class="game-title fw-medium text-start color-palette-1 m-0">Top Up</p>
                                        </div>
                                    </th>
                                    <td>
                                        <p class="fw-medium text-start color-palette-1 m-0">12 April 2022</p>
                                        <p class="text-xs fw-normal text-start color-palette-2 m-0">10:26</p>
                                    </td>
                                    <td>
                                        <p class="fw-medium color-palette-1 m-0">Rp 740.000</p>
                                    </td>
                                    <td>
                                        <a href="../member/detail-transaksi.html"
                                            class="btn btn-status rounded-pill text-sm">Details</a>
                                    </td>
                                </tr>
                                <tr data-category="transfer" class="align-middle">
                                    <th scope="row">
                                        <img class="float-start me-3 mb-lg-0 mb-3" src="./assets/img/transfer.svg"
                                            width="80" height="60" alt="">
                                        <div class="game-title-header">
                                            <p class="game-title fw-medium text-start color-palette-1 m-0">Transfer</p>
                                        </div>
                                    </th>
                                    <td>
                                        <p class="fw-medium text-start color-palette-1 m-0">11 April 2022</p>
                                        <p class="text-xs fw-normal text-start color-palette-2 m-0">08:06</p>
                                    </td>
                                    <td>
                                        <p class="fw-medium color-palette-1 m-0">Rp 120.000</p>
                                    </td>
                                    <td>
                                        <a href="../member/detail-transaksi.html"
                                            class="btn btn-status rounded-pill text-sm">Details</a>
                                    </td>
                                </tr>
                                <tr data-category="bayar" class="align-middle">
                                    <th scope="row">
                                        <img class="float-start me-3 mb-lg-0 mb-3" src="./assets/img/bayar.svg"
                                            width="80" height="60" alt="">
                                        <div class="game-title-header">
                                            <p class="game-title fw-medium text-start color-palette-1 m-0">Bayar</p>
                                        </div>
                                    </th>
                                    <td>
                                        <p class="fw-medium text-start color-palette-1 m-0">10 April 2022</p>
                                        <p class="text-xs fw-normal text-start color-palette-2 m-0">05:12</p>
                                    </td>
                                    <td>
                                        <p class="fw-medium color-palette-1 m-0">Rp 200.000</p>
                                    </td>
                                    <td>
                                        <a href="../member/detail-transaksi.html"
                                            class="btn btn-status rounded-pill text-sm">Details</a>
                                    </td>
                                </tr>
                                <tr data-category="bayar" class="align-middle">
                                    <th scope="row">
                                        <img class="float-start me-3 mb-lg-0 mb-3" src="./assets/img/bayar.svg"
                                            width="80" height="60" alt="">
                                        <div class="game-title-header">
                                            <p class="game-title fw-medium text-start color-palette-1 m-0">Bayar</p>
                                        </div>
                                    </th>
                                    <td>
                                        <p class="fw-medium text-start color-palette-1 m-0">10 April 2022</p>
                                        <p class="text-xs fw-normal text-start color-palette-2 m-0">05:12</p>
                                    </td>
                                    <td>
                                        <p class="fw-medium color-palette-1 m-0">Rp 200.000</p>
                                    </td>
                                    <td>
                                        <a href="../member/detail-transaksi.html"
                                            class="btn btn-status rounded-pill text-sm">Details</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <script src="./riwayat.js">
    </script>
<?= $this->endSection(); ?>