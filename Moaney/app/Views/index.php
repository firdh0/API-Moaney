<?= $this->extend('layout/template1'); ?>

<?= $this->section('call-css'); ?> 
<link rel="stylesheet" href="./css/homepage.css">
<link rel="stylesheet" href="./css/utilities.css">
<?= $this->endSection(); ?>

<?= $this->section('content-template1'); ?>
<!-- Header -->
<section class="header pt-lg-60 pb-50">
    <div class="container-xxl container-fluid">
        <div class="row gap-lg-0 gap-5">
            <div class="col-lg-6 col-12 my-auto">
                <p class="text-support text-lg color-palette-2">
                    Halo,
                </p>
                <h1 class="header-title color-palette-1 fw-bold">
                    Selamat <span class="d-sm-inline d-none"></span><span class="d-sm-none d-inline">a
                    </span><span class="underline-blue"> Datang</span> <br class="d-sm-block d-none"> <span
                        class="underline-blue">di Moaney</span>
                </h1>
                <p class="mt-30 mb-40 text-lg color-palette-1">Kami menjamin kenyamanan, keamanan, <br
                        class="d-md-block d-none"> dan kecepatan dalam bertransaksi
                </p>
                <div class="d-flex flex-lg-row flex-column gap-4">
                    <a class="btn btn-get text-lg text-white rounded-pill" href="#feature" role="button">Yuk Mulai!</a>
                </div>
            </div>
            <div class="col-lg-6 col-12 d-lg-block d-none">
                <div class="d-flex justify-content-lg-end justify-content-center me-lg-5">
                    <div class="position-relative" data-aos="zoom-in">
                        <img src="./assets/img/banner.svg" class="img-fluid" alt="">
                        <div class="card left-card position-absolute border-0">
                            <div class="d-flex align-items-center mb-16 gap-3">
                                <img src="./assets/img/profilePNGG.png" width="40" height="40" class="rounded-pill"
                                    alt="">
                                <div>
                                    <p class="text-sm fw-medium color-palette-1 m-0">Firdho</p>
                                    <p class="text-xs fw-light color-palette-2 m-0">Member </p>
                                </div>
                            </div>
                            <div class="d-flex gap-2">
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.0489 0.927049C11.3483 0.0057386 12.6517 0.00574004 12.9511 0.927051L14.9187 6.98278C15.0526 7.3948 15.4365 7.67376 15.8697 7.67376H22.2371C23.2058 7.67376 23.6086 8.91338 22.8249 9.48278L17.6736 13.2254C17.3231 13.4801 17.1764 13.9314 17.3103 14.3435L19.2779 20.3992C19.5773 21.3205 18.5228 22.0866 17.7391 21.5172L12.5878 17.7746C12.2373 17.5199 11.7627 17.5199 11.4122 17.7746L6.2609 21.5172C5.47719 22.0866 4.42271 21.3205 4.72206 20.3992L6.68969 14.3435C6.82356 13.9314 6.6769 13.4801 6.32642 13.2254L1.17511 9.48278C0.391392 8.91338 0.794168 7.67376 1.76289 7.67376H8.13026C8.56349 7.67376 8.94744 7.3948 9.08132 6.98278L11.0489 0.927049Z"
                                        fill="#FEBD57" />
                                </svg>
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.0489 0.927049C11.3483 0.0057386 12.6517 0.00574004 12.9511 0.927051L14.9187 6.98278C15.0526 7.3948 15.4365 7.67376 15.8697 7.67376H22.2371C23.2058 7.67376 23.6086 8.91338 22.8249 9.48278L17.6736 13.2254C17.3231 13.4801 17.1764 13.9314 17.3103 14.3435L19.2779 20.3992C19.5773 21.3205 18.5228 22.0866 17.7391 21.5172L12.5878 17.7746C12.2373 17.5199 11.7627 17.5199 11.4122 17.7746L6.2609 21.5172C5.47719 22.0866 4.42271 21.3205 4.72206 20.3992L6.68969 14.3435C6.82356 13.9314 6.6769 13.4801 6.32642 13.2254L1.17511 9.48278C0.391392 8.91338 0.794168 7.67376 1.76289 7.67376H8.13026C8.56349 7.67376 8.94744 7.3948 9.08132 6.98278L11.0489 0.927049Z"
                                        fill="#FEBD57" />
                                </svg>
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.0489 0.927049C11.3483 0.0057386 12.6517 0.00574004 12.9511 0.927051L14.9187 6.98278C15.0526 7.3948 15.4365 7.67376 15.8697 7.67376H22.2371C23.2058 7.67376 23.6086 8.91338 22.8249 9.48278L17.6736 13.2254C17.3231 13.4801 17.1764 13.9314 17.3103 14.3435L19.2779 20.3992C19.5773 21.3205 18.5228 22.0866 17.7391 21.5172L12.5878 17.7746C12.2373 17.5199 11.7627 17.5199 11.4122 17.7746L6.2609 21.5172C5.47719 22.0866 4.42271 21.3205 4.72206 20.3992L6.68969 14.3435C6.82356 13.9314 6.6769 13.4801 6.32642 13.2254L1.17511 9.48278C0.391392 8.91338 0.794168 7.67376 1.76289 7.67376H8.13026C8.56349 7.67376 8.94744 7.3948 9.08132 6.98278L11.0489 0.927049Z"
                                        fill="#FEBD57" />
                                </svg>
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.0489 0.927049C11.3483 0.0057386 12.6517 0.00574004 12.9511 0.927051L14.9187 6.98278C15.0526 7.3948 15.4365 7.67376 15.8697 7.67376H22.2371C23.2058 7.67376 23.6086 8.91338 22.8249 9.48278L17.6736 13.2254C17.3231 13.4801 17.1764 13.9314 17.3103 14.3435L19.2779 20.3992C19.5773 21.3205 18.5228 22.0866 17.7391 21.5172L12.5878 17.7746C12.2373 17.5199 11.7627 17.5199 11.4122 17.7746L6.2609 21.5172C5.47719 22.0866 4.42271 21.3205 4.72206 20.3992L6.68969 14.3435C6.82356 13.9314 6.6769 13.4801 6.32642 13.2254L1.17511 9.48278C0.391392 8.91338 0.794168 7.67376 1.76289 7.67376H8.13026C8.56349 7.67376 8.94744 7.3948 9.08132 6.98278L11.0489 0.927049Z"
                                        fill="#FEBD57" />
                                </svg>
                                <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.0489 0.927049C11.3483 0.0057386 12.6517 0.00574004 12.9511 0.927051L14.9187 6.98278C15.0526 7.3948 15.4365 7.67376 15.8697 7.67376H22.2371C23.2058 7.67376 23.6086 8.91338 22.8249 9.48278L17.6736 13.2254C17.3231 13.4801 17.1764 13.9314 17.3103 14.3435L19.2779 20.3992C19.5773 21.3205 18.5228 22.0866 17.7391 21.5172L12.5878 17.7746C12.2373 17.5199 11.7627 17.5199 11.4122 17.7746L6.2609 21.5172C5.47719 22.0866 4.42271 21.3205 4.72206 20.3992L6.68969 14.3435C6.82356 13.9314 6.6769 13.4801 6.32642 13.2254L1.17511 9.48278C0.391392 8.91338 0.794168 7.67376 1.76289 7.67376H8.13026C8.56349 7.67376 8.94744 7.3948 9.08132 6.98278L11.0489 0.927049Z"
                                        fill="#FEBD57" />
                                </svg>
                            </div>
                        </div>
                        <div class="card right-card position-absolute border-0">
                            <div class="position-relative d-flex flex-row justify-content-center mb-24">
                                <img src="./assets/img/pic.svg" class="rounded-pill" alt="">
                                <p class="right-card-support text-white text-xxs text-center position-absolute m-0">
                                    New</p>
                            </div>
                            <div>
                                <p class="text-sm text-center m-0 fw-medium color-palette-1">Doctor Strange</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3 Column - Feature -->
<section id="feature" class="feature pt-50 pb-50">
    <div class="container-fluid">
        <h2 class="text-4xl fw-bold color-palette-1 text-center mb-30">Kenapa Harus<br> Memilih Kami?
        </h2>
        <div class="row gap-lg-0 gap-4" data-aos="fade-up">
            <div class="col-lg-4">
                <div class="card feature-card border-0">
                    <svg class="mb-30" width="80" height="80" viewBox="0 0 80 80" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0-icon1" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="80"
                            height="80">
                            <circle cx="40" cy="40" r="40" fill="#D7D7F8" />
                        </mask>
                        <g mask="url(#mask0-icon1)">
                            <circle cx="40" cy="40" r="40" fill="#D7D7F8" />
                            <mask id="mask1" mask-type="alpha" maskUnits="userSpaceOnUse" x="-12" y="23" width="67"
                                height="73">
                                <path d="M-12 23H33C45.1503 23 55 32.8497 55 45V96H-12V23Z" fill="#4D17E2" />
                            </mask>
                            <g mask="url(#mask1)">
                                <path d="M-12 23H33C45.1503 23 55 32.8497 55 45V96H-12V23Z" fill="#695DE9" />
                                <path d="M37 55H-4" stroke="white" stroke-width="4" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M23 64L-4 64" stroke="#B7B0F4" stroke-width="4" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <rect x="23" y="13" width="52" height="34" rx="13" fill="#5C52C7" />
                            </g>
                            <rect x="27" y="16" width="41" height="27" rx="13" fill="#2B2467" />
                            <circle cx="47.5" cy="29.5" r="5.5" stroke="white" stroke-width="4" />
                        </g>
                    </svg>
                    <p class="fw-semibold text-2xl mb-2 color-palette-1">1. Aman</p>
                    <p class="text-lg color-palette-1 mb-0">Setiap transaksi pasti nyaman dan aman </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card feature-card border-0">
                    <svg class="mb-30" width="80" height="80" viewBox="0 0 80 80" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0-icon2" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="80"
                            height="80">
                            <circle cx="40" cy="40" r="40" fill="#D7D7F8" />
                        </mask>
                        <g mask="url(#mask0-icon2)">
                            <circle cx="40" cy="40" r="40" fill="#D7D7F8" />
                            <rect x="-14" y="16" width="62" height="82" rx="16" fill="#695DE9" />
                            <path d="M32 36H5" stroke="white" stroke-width="4" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M27 45L9 45" stroke="#B7B0F4" stroke-width="4" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <rect x="56" y="37" width="49" height="75" rx="16" fill="#2B2467" />
                            <path d="M97 50H70" stroke="white" stroke-width="4" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M92 59L74 59" stroke="#6B63AC" stroke-width="4" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </g>
                    </svg>
                    <p class="fw-semibold text-2xl mb-2 color-palette-1">2. Beragam</p>
                    <p class="text-lg color-palette-1 mb-0">Terdapat berbagai metode transaksi</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card feature-card border-0">
                    <svg class="mb-30" width="80" height="80" viewBox="0 0 80 80" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0-icon3" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="80"
                            height="80">
                            <circle cx="40" cy="40" r="40" fill="#D7D7F8" />
                        </mask>
                        <g mask="url(#mask0-icon3)">
                            <circle cx="40" cy="40" r="40" fill="#D7D7F8" />
                            <rect x="13" y="25" width="54" height="61" rx="16" fill="#695DE9" />
                            <path d="M50 46L50 68" stroke="white" stroke-width="4" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M40 54L40 68" stroke="#B7B0F4" stroke-width="4" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M30 60L30 68" stroke="#B7B0F4" stroke-width="4" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <circle cx="40" cy="26" r="14" fill="#2B2467" />
                            <path
                                d="M39.0489 18.927C39.3483 18.0057 40.6517 18.0057 40.9511 18.9271L42.0206 22.2188C42.1545 22.6309 42.5385 22.9098 42.9717 22.9098H46.4329C47.4016 22.9098 47.8044 24.1494 47.0207 24.7188L44.2205 26.7533C43.87 27.0079 43.7234 27.4593 43.8572 27.8713L44.9268 31.1631C45.2261 32.0844 44.1717 32.8506 43.388 32.2812L40.5878 30.2467C40.2373 29.9921 39.7627 29.9921 39.4122 30.2467L36.612 32.2812C35.8283 32.8506 34.7739 32.0844 35.0732 31.1631L36.1428 27.8713C36.2766 27.4593 36.13 27.0079 35.7795 26.7533L32.9793 24.7188C32.1956 24.1494 32.5984 22.9098 33.5671 22.9098H37.0283C37.4615 22.9098 37.8455 22.6309 37.9794 22.2188L39.0489 18.927Z"
                                fill="white" />
                        </g>
                    </svg>
                    <p class="fw-semibold text-2xl mb-2 color-palette-1">3. Cepat</p>
                    <p class="text-lg color-palette-1 mb-0">Setiap transaksi tidak terdapat error</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Reached -->
<section class="reached pt-50 pb-50">
    <div class="container-fluid">
        <div class="d-flex flex-lg-row flex-column align-items-center justify-content-center gap-lg-0 gap-4">
            <div class="me-lg-35">
                <p class="text-4xl text-lg-start text-center color-palette-1 fw-bold m-0">290 ribu+</p>
                <p class="text-lg text-lg-start text-center color-palette-2 m-0">Transaksi Dilakukan</p>
            </div>
            <div class="vertical-line me-lg-35 ms-lg-35 d-lg-block d-none"></div>
            <div class="horizontal-line mt-6 mb-6 me-lg-35 ms-lg-35 d-lg-none d-block"></div>
            <div class="me-lg-35 ms-lg-35">
                <p class="text-4xl text-lg-start text-center color-palette-1 fw-bold m-0">100 ribu+</p>
                <p class="text-lg text-lg-start text-center color-palette-2 m-0">Pengguna Terdaftar</p>
            </div>
            <div class="horizontal-line mt-6 mb-6 me-lg-35 ms-lg-35 d-lg-none d-block"></div>
            <div class="vertical-line me-lg-35 ms-lg-35 d-lg-block d-none"></div>
            <div class="me-lg-35 ms-lg-35">
                <p class="text-4xl text-lg-start text-center color-palette-1 fw-bold m-0">99,9%</p>
                <p class="text-lg text-lg-start text-center color-palette-2 m-0">Kepuasan Pelanggan</p>
            </div>
            <div class="horizontal-line mt-6 mb-6 me-lg-35 ms-lg-35 d-lg-none d-block"></div>
            <div class="vertical-line me-lg-35 ms-lg-35 d-lg-block d-none"></div>
            <div class="me-lg-35 ms-lg-35">
                <p class="text-4xl text-lg-start text-center color-palette-1 fw-bold m-0">4.6+</p>
                <p class="text-lg text-lg-start text-center color-palette-2 m-0">Rating Website</p>
            </div>
        </div>
    </div>
</section>

<!-- 5 Column - Featured-product -->
<section class="featured-game pt-50 pb-50">
    <div class="container-fluid">
        <h2 class="text-4xl fw-bold color-palette-1 text-center mb-30">Film
        </h2>
        </h2>
        <div class="d-flex flex-row flex-lg-wrap overflow-setting justify-content-lg-between gap-lg-3 gap-4"
            data-aos="fade-up">
            <div class="featured-game-card position-relative">
                <a href="./general/bayar.php">
                    <div class="blur-sharp">
                        <img src="./assets/img/fb.jpg" width="205" height="270" alt="">
                    </div>
                    <div class="cover position-absolute bottom-0 m-32">
                        <div class="d-flex flex-column h-100 justify-content-between text-decoration-none">
                            <div class="game-icon mx-auto">
                            </div>
                            <div>
                                <p class="fw-semibold text-white text-xl m-0">Fantastic Beast 3</p>
                                <p class="fw-light text-white m-0">Fiksi</p>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            <div class="featured-game-card position-relative">
                <a href="./general/bayar.php">
                    <div class="blur-sharp">
                        <img src="./assets/img/kkn.jpg" width="205" height="270" alt="">
                    </div>
                    <div class="cover position-absolute bottom-0 m-32">
                        <div class="d-flex flex-column h-100 justify-content-between text-decoration-none">
                            <div class="game-icon mx-auto">
                            </div>
                            <div>
                                <p class="fw-semibold text-white text-xl m-0">KKN di Desa Penari</p>
                                <p class="fw-light text-white m-0">Horor</p>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            <div class="featured-game-card position-relative">
                <a href="./general/bayar.php">
                    <div class="blur-sharp">
                        <img src="./assets/img/strange.jpg" width="205" height="270" alt="">
                    </div>
                    <div class="cover position-absolute bottom-0 m-32">
                        <div class="d-flex flex-column h-100 justify-content-between text-decoration-none">
                            <div class="game-icon mx-auto">
                            </div>
                            <div>
                                <p class="fw-semibold text-white text-xl m-0">Doctor Strange</p>
                                <p class="fw-light text-white m-0">Fiksi</p>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            <div class="featured-game-card position-relative">
                <a href="/general/bayar.php">
                    <div class="blur-sharp">
                        <img src="./assets/img/thor.jpg" width="205" height="270" alt="">
                    </div>
                    <div class="cover position-absolute bottom-0 m-32">
                        <div class="d-flex flex-column h-100 justify-content-between text-decoration-none">
                            <div class="game-icon mx-auto">
                            </div>
                            <div>
                                <p class="fw-semibold text-white text-xl m-0">Thor Love and Thunder</p>
                                <p class="fw-light text-white m-0">Fiksi</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 5 Column - Featured-game -->
<section class="featured-game pt-50 pb-50">
    <div class="container-fluid">
        <h2 class="text-4xl fw-bold color-palette-1 text-center mb-30">Kelompok 3
        </h2>
        </h2>
        <div class="d-flex flex-row flex-lg-wrap overflow-setting justify-content-lg-between gap-lg-3 gap-4"
            data-aos="fade-up">
            <div class="featured-game-card position-relative">
                <a href="#">
                    <div class="blur-sharp">
                        <img src="./assets/img/item.png" width="205" height="270" alt="">
                    </div>
                    <div class="cover position-absolute bottom-0 m-32">
                        <div class="d-flex flex-column h-100 justify-content-between text-decoration-none">
                            <div class="game-icon mx-auto">
                                <svg width="54" height="36" viewBox="0 0 54 36" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                </svg>
                            </div>
                            <div>
                                <p class="fw-semibold text-white text-xl m-0">Muhammad Firdho Kustiawan</p>
                                <p class="fw-light text-white m-0">5027201005</p>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            <div class="featured-game-card position-relative">
                <a href="#">
                    <div class="blur-sharp">
                        <img src="./assets/img/item.png" width="205" height="270" alt="">
                    </div>
                    <div class="cover position-absolute bottom-0 m-32">
                        <div class="d-flex flex-column h-100 justify-content-between text-decoration-none">
                            <div class="game-icon mx-auto">
                                <svg width="54" height="36" viewBox="0 0 54 36" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                </svg>
                            </div>
                            <div>
                                <p class="fw-semibold text-white text-xl m-0">M. Fernando N Sibarani</p>
                                <p class="fw-light text-white m-0">5027201015</p>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            <div class="featured-game-card position-relative">
                <a href="#">
                    <div class="blur-sharp">
                        <img src="./assets/img/item.png" width="205" height="270" alt="">
                    </div>
                    <div class="cover position-absolute bottom-0 m-32">
                        <div class="d-flex flex-column h-100 justify-content-between text-decoration-none">
                            <div class="game-icon mx-auto">
                                <svg width="54" height="36" viewBox="0 0 54 36" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                </svg>
                            </div>
                            <div>
                                <p class="fw-semibold text-white text-xl m-0">Gennaro Fajar Mennde</p>
                                <p class="fw-light text-white m-0">5027201061</p>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>
