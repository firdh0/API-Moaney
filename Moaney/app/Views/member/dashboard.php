<?= $this->extend('layout/template2'); ?>

<?= $this->section('call-css'); ?> 
<link rel="stylesheet" href="./css/utilities.css" />
<link rel="stylesheet" href="./css/sidebar.css">
<link rel="stylesheet" href="./css/dashboard.css" />
<?= $this->endSection(); ?>

<?= $this->section('content-template2'); ?>
<!-- Overview -->
<section class="overview overflow-auto">
        <?= $this->include('layout/profile') ?>
            <div class="menus">
                <div class="item active mb-30">
                    <svg class="icon me-3" width="25" height="25" viewBox="0 0 25 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.9033 14.7502H14.9033V21.7502H21.9033V14.7502Z" stroke="#7E8CAC"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10.9033 14.7502H3.90332V21.7502H10.9033V14.7502Z" stroke="#7E8CAC"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M21.9033 3.75024H14.9033V10.7502H21.9033V3.75024Z" stroke="#7E8CAC"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10.9033 3.75024H3.90332V10.7502H10.9033V3.75024Z" stroke="#7E8CAC"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="item-title m-0">
                        <a href="" class="text-lg text-decoration-none">Dashboard</a>
                    </p>
                </div>
                <div class="item mb-30">
                    <svg class="icon me-3" width="25" height="25" viewBox="0 0 25 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.90332 2.41406L3.90332 6.41406V20.4141C3.90332 20.9445 4.11403 21.4532 4.48911 21.8283C4.86418 22.2033 5.37289 22.4141 5.90332 22.4141H19.9033C20.4338 22.4141 20.9425 22.2033 21.3175 21.8283C21.6926 21.4532 21.9033 20.9445 21.9033 20.4141V6.41406L18.9033 2.41406H6.90332Z"
                            stroke="#7E8CAC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M16.9033 10.4141C16.9033 11.4749 16.4819 12.4923 15.7317 13.2425C14.9816 13.9926 13.9642 14.4141 12.9033 14.4141C11.8425 14.4141 10.825 13.9926 10.0749 13.2425C9.32475 12.4923 8.90332 11.4749 8.90332 10.4141"
                            stroke="#7E8CAC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3.90332 6.41406H21.9033" stroke="#7E8CAC" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <p class="item-title m-0">
                        <a href="../member/riwayat.html" class="text-lg text-decoration-none">Riwayat Transaksi</a>
                    </p>
                </div>
                <div class="item mb-30">
                    <svg class="icon me-3" width="25" height="25" viewBox="0 0 25 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.2634 7.05396C20.5218 8.31274 21.3787 9.9164 21.7257 11.6621C22.0728 13.4079 21.8944 15.2173 21.2131 16.8617C20.5318 18.5061 19.3782 19.9115 17.8983 20.9003C16.4183 21.8891 14.6783 22.4169 12.8984 22.4169C11.1185 22.4169 9.37859 21.8891 7.89861 20.9003C6.41864 19.9115 5.26508 18.5061 4.58381 16.8617C3.90253 15.2173 3.72413 13.4079 4.07116 11.6621C4.41819 9.9164 5.27506 8.31274 6.53344 7.05396"
                            stroke="#7E8CAC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12.9033 2.41406V12.4141" stroke="#7E8CAC" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <p class="item-title m-0">
                        <a href="../index.html" class="text-lg text-decoration-none">Keluar</a>
                    </p>
                </div>
            </div>
            <div class="sidebar-footer pt-73 pe-30">
                <div class="footer-card">
                    <a class="btn btn-get-started w-100 fw-medium text-xs text-center text-white rounded-pill"
                        href="../index.html" role="button">Home</a>
                </div>
            </div>
        </div>
    </section>
    <main class="main-wrapper">
        <div class="ps-lg-0">
            <h2 class="text-4xl fw-bold color-palette-1 mb-30">Dashboard</h2>
            <div class="mb-30">
                <p class="text-lg color-palette-2 mb-12">Saldo</p>
                <h3 class="text-5xl fw-medium color-palette-1">Rp 4.518.000.500</h3>
            </div>
            <div class="top-up-categories mb-30">
                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-4 ps-15 pe-15 pb-lg-0 pb-4">
                            <div class="categories-card">
                                <div class="d-flex align-items-center">
                                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0-category-1" mask-type="alpha" maskUnits="userSpaceOnUse"
                                            x="0" y="0" width="60" height="60">
                                            <circle cx="30" cy="30" r="30" fill="#D7D7F8" />
                                        </mask>
                                        <g mask="url(#mask0-category-1)">
                                            <circle cx="30" cy="30" r="30" fill="#D7D7F8" />
                                            <mask id="mask1-category-1" mask-type="alpha" maskUnits="userSpaceOnUse"
                                                x="10" y="12" width="40" height="30">
                                                <rect x="10" y="12.5" width="40" height="28.75" rx="6"
                                                    fill="#695DE9" />
                                            </mask>
                                            <g mask="url(#mask1-category-1)">
                                                <rect x="10" y="12.5" width="40" height="28.75" rx="6"
                                                    fill="#695DE9" />
                                                <circle cx="43" cy="19" r="10" fill="#4F46B5" />
                                            </g>
                                            <circle cx="43" cy="18" r="9" fill="#2B2467" />
                                            <path
                                                d="M42.5109 13.0768C42.6649 12.603 43.3352 12.603 43.4891 13.0768L44.3279 15.6581C44.3967 15.87 44.5942 16.0135 44.817 16.0135H47.5311C48.0293 16.0135 48.2365 16.651 47.8334 16.9438L45.6376 18.5392C45.4574 18.6701 45.3819 18.9023 45.4508 19.1142L46.2895 21.6955C46.4435 22.1693 45.9012 22.5633 45.4981 22.2705L43.3023 20.6751C43.1221 20.5442 42.878 20.5442 42.6977 20.6751L40.5019 22.2705C40.0989 22.5633 39.5566 22.1693 39.7105 21.6955L40.5492 19.1142C40.6181 18.9023 40.5427 18.6701 40.3624 18.5392L38.1666 16.9438C37.7635 16.651 37.9707 16.0135 38.4689 16.0135H41.1831C41.4059 16.0135 41.6033 15.87 41.6722 15.6581L42.5109 13.0768Z"
                                                fill="white" />
                                            <rect x="25" y="40" width="10" height="7.5" fill="#695DE9" />
                                            <rect x="17.5" y="47.5" width="25" height="2.5" rx="1.25"
                                                fill="#695DE9" />
                                            <path d="M32.6875 35.3125L15.5 35.3125" stroke="white"
                                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M19.5 18.3125L15.5 18.3125" stroke="white" stroke-width="2.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M26.4375 29.5L15.5 29.5" stroke="#B7B0F4" stroke-width="2.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                    </svg>
                                    <p class="color-palette-1 mb-0 ms-12 text-lg fw-medium color-palette-1">Top Up </p>
                                </div>
                                <div class="sidebar-footer pt-20 pe-20">
                                    <a class="btn btn-get-started w-100 fw-medium text-xs text-center text-white rounded-pill"
                                        href="./dashboard-topup.html" role="button">Gass Top Up</a>
                                </div>
                            </div>
                        </div>
                        <!-- ============ awas kotak2annya blom diberi href ============ -->
                        <div class="col-lg-4 ps-15 pe-15 pb-lg-0 pb-4">
                            <div class="categories-card">
                                <div class="d-flex align-items-center">
                                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0-category-2" mask-type="alpha" maskUnits="userSpaceOnUse"
                                            x="0" y="0" width="60" height="60">
                                            <circle cx="30" cy="30" r="30" fill="#D7D7F8" />
                                        </mask>
                                        <g mask="url(#mask0-category-2)">
                                            <circle cx="30" cy="30" r="30" fill="#D7D7F8" />
                                            <mask id="mask1-category-2" mask-type="alpha" maskUnits="userSpaceOnUse"
                                                x="12" y="16" width="30" height="49">
                                                <path
                                                    d="M12 22C12 18.6863 14.6863 16 18 16H36C39.3137 16 42 18.6863 42 22V65H12V22Z"
                                                    fill="#695DE9" />
                                            </mask>
                                            <g mask="url(#mask1-category-2)">
                                                <path
                                                    d="M12 22C12 18.6863 14.6863 16 18 16H36C39.3137 16 42 18.6863 42 22V65H12V22Z"
                                                    fill="#695DE9" />
                                                <path
                                                    d="M16 42C16 40.3431 17.3431 39 19 39H28C29.6569 39 31 40.3431 31 42V61C31 62.6569 29.6569 64 28 64H19C17.3431 64 16 62.6569 16 61V42Z"
                                                    fill="#B7B0F4" />
                                                <path
                                                    d="M34 42C34 40.3431 35.3431 39 37 39H46C47.6569 39 49 40.3431 49 42V61C49 62.6569 47.6569 64 46 64H37C35.3431 64 34 62.6569 34 61V42Z"
                                                    fill="white" />
                                                <circle cx="42" cy="23" r="10" fill="#4F46B5" />
                                            </g>
                                            <circle cx="42" cy="21" r="9" fill="#2B2467" />
                                            <path
                                                d="M41.5109 16.0768C41.6648 15.603 42.3352 15.603 42.4891 16.0768L43.3279 18.6581C43.3967 18.87 43.5942 19.0135 43.817 19.0135H46.5311C47.0293 19.0135 47.2365 19.651 46.8334 19.9438L44.6376 21.5392C44.4574 21.6701 44.3819 21.9023 44.4508 22.1142L45.2895 24.6955C45.4435 25.1693 44.9012 25.5633 44.4981 25.2705L42.3023 23.6751C42.1221 23.5442 41.878 23.5442 41.6977 23.6751L39.5019 25.2705C39.0989 25.5633 38.5566 25.1693 38.7105 24.6955L39.5492 22.1142C39.6181 21.9023 39.5427 21.6701 39.3624 21.5392L37.1666 19.9438C36.7635 19.651 36.9707 19.0135 37.4689 19.0135H40.1831C40.4059 19.0135 40.6033 18.87 40.6722 18.6581L41.5109 16.0768Z"
                                                fill="white" />
                                            <path d="M27 22L17 22" stroke="white" stroke-width="2.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M24 27L17 27" stroke="#B7B0F4" stroke-width="2.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                    </svg>
                                    <p class="color-palette-1 mb-0 ms-12 text-lg fw-medium color-palette-1">Transfer</p>
                                </div>
                                <div class="sidebar-footer pt-20 pe-20">
                                    <a class="btn btn-get-started w-100 fw-medium text-xs text-center text-white rounded-pill"
                                        href="dashboard-transfer.html" role="button">Gass Transfer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="latest-transaction">
                <p class="text-lg fw-medium color-palette-1 mb-14">4 Transaksi Terakhir </p>
                <div class="main-content main-content-table overflow-auto">
                    <table class="table table-borderless">
                        <thead>
                            <tr class="color-palette-1">
                                <th class="text-start" scope="col">Jenis Transaksi</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="align-middle">
                                <th scope="row">
                                    <img class="float-start me-3 mb-lg-0 mb-3" src="./assets/img/topup.svg"
                                        width="80" height="60" alt="">
                                    <div class="game-title-header align-middle">
                                        <p class="game-title fw-medium text-start color-palette-1 m-0">Top Up</p>
                                    </div>
                                </th>
                                <td>
                                    <p class="fw-medium text-start color-palette-1 m-0">12 April 2022</p>
                                    <p class="text-xs fw-normal text-start color-palette-2 m-0">12:06</p>
                                </td>
                                <td>
                                    <p class="fw-medium text-start color-palette-1 m-0">Rp 290.000</p>
                                </td>
                            </tr>
                            <tr class="align-middle text-center">
                                <th scope="row">
                                    <img class="float-start me-3 mb-lg-0 mb-3" src="./assets/img/transfer.svg"
                                        width="80" height="60" alt="">
                                    <div class="game-title-header">
                                        <p class="game-title fw-medium text-start color-palette-1 m-0">Transfer</p>
                                    </div>
                                </th>
                                <td>
                                    <p class="fw-medium text-start color-palette-1 m-0">12 April 2022</p>
                                    <p class="text-xs fw-normal text-start color-palette-2 m-0">12:06</p>
                                </td>
                                <td>
                                    <p class="fw-medium text-start color-palette-1 m-0">Rp 740.000</p>
                                </td>
                            </tr>
                            <tr class="align-middle text-center">
                                <th scope="row">
                                    <img class="float-start me-3 mb-lg-0 mb-3" src="./assets/img/bayar.svg"
                                        width="80" height="60" alt="">
                                    <div class="game-title-header">
                                        <p class="game-title fw-medium text-start color-palette-1 m-0">Bayar</p>
                                    </div>
                                </th>
                                <td>
                                    <p class="fw-medium text-start color-palette-1 m-0">12 April 2022</p>
                                    <p class="text-xs fw-normal text-start color-palette-2 m-0">12:06</p>
                                </td>
                                <td>
                                    <p class="fw-medium text-start color-palette-1 m-0">Rp 120.000</p>
                                </td>
                                <td>
                            </tr>
                            <tr class="align-middle text-center">
                                <th scope="row">
                                    <img class="float-start me-3 mb-lg-0 mb-3" src="./assets/img/bayar.svg"
                                        width="80" height="60" alt="">
                                    <div class="game-title-header">
                                        <p class="game-title fw-medium text-start color-palette-1 m-0">Bayar</p>
                                    </div>
                                </th>
                                <td>
                                    <p class="fw-medium text-start color-palette-1 m-0">12 April 2022</p>
                                    <p class="text-xs fw-normal text-start color-palette-2 m-0">12:06</p>
                                </td>
                                <td>
                                    <p class="fw-medium text-start color-palette-1 m-0">Rp 420.000</p>
                                </td>
                                <td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</section>
<?= $this->endSection(); ?>