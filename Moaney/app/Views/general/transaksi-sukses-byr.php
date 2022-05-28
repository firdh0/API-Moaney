<?= $this->extend('layout/template2'); ?>

<?= $this->section('call-css'); ?> 
<link rel="stylesheet" href="./css/utilities.css">
<link rel="stylesheet" href="./css/404-tidak-ditemukan.css">
<?= $this->endSection(); ?>

<?= $this->section('content-template2'); ?>
<!-- Complete Checkout Content -->
<section class="not-found mx-auto pt-145 pb-md-212 pb-100">
    <div class="container-fluid">
        <div class="text-center">
                <img src="./assets/img/wallet.svg" alt="" class="rounded mx-auto d-block">
                <defs>
                    <linearGradient id="paint0_linear" x1="0" y1="177.412" x2="13.1704" y2="177.412"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#83A6FF" />
                        <stop offset="1" stop-color="#5A78FF" />
                    </linearGradient>
                    <linearGradient id="paint1_linear" x1="468.289" y1="25.0788" x2="480.658" y2="25.0788"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#83A6FF" />
                        <stop offset="1" stop-color="#5A78FF" />
                    </linearGradient>
                    <linearGradient id="paint2_linear" x1="407.293" y1="252.456" x2="377.296" y2="258.937"
                        gradientUnits="userSpaceOnUse">
                        <stop offset="0.00289017" stop-color="#606673" stop-opacity="0" />
                        <stop offset="1" stop-color="#373C47" />
                    </linearGradient>
                    <linearGradient id="paint3_linear" x1="232.522" y1="221.979" x2="232.522" y2="48.4336"
                        gradientUnits="userSpaceOnUse">
                        <stop offset="0.00289017" stop-color="#606673" stop-opacity="0" />
                        <stop offset="1" stop-color="#373C47" />
                    </linearGradient>
                    <linearGradient id="paint4_linear" x1="29.1692" y1="78.748" x2="422.924" y2="78.748"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FF66A9" />
                        <stop offset="1" stop-color="#F53689" />
                    </linearGradient>
                    <linearGradient id="paint5_linear" x1="437.527" y1="144.362" x2="459.972" y2="169.644"
                        gradientUnits="userSpaceOnUse">
                        <stop offset="0.00289017" stop-color="#606673" stop-opacity="0" />
                        <stop offset="1" stop-color="#373C47" />
                    </linearGradient>
                    <linearGradient id="paint6_linear" x1="30.7966" y1="144.362" x2="53.238" y2="169.644"
                        gradientUnits="userSpaceOnUse">
                        <stop offset="0.00289017" stop-color="#606673" stop-opacity="0" />
                        <stop offset="1" stop-color="#373C47" />
                    </linearGradient>
                    <linearGradient id="paint7_linear" x1="226.322" y1="71.8503" x2="226.322" y2="47.7445"
                        gradientUnits="userSpaceOnUse">
                        <stop offset="0.00289017" stop-color="#3F5073" stop-opacity="0" />
                        <stop offset="1" stop-color="#283247" />
                    </linearGradient>
                    <clipPath id="clip0">
                        <rect width="482.759" height="300" fill="white" />
                    </clipPath>
                </defs>
        </div>
        <div class="pt-70 pb-md-50 pb-150">
            <h2 class="text-4xl fw-bold text-center color-palette-1 mb-10">Yeay!! Transaksi Berhasil</h2>
            <p class="text-lg text-center color-palette-1 m-0">Tetap bertransaksi melalui kami<br
                    class="d-sm-block d-none">
                    Sehat selalu :)</p>
        </div>
        <div class="button-group d-flex flex-column mx-auto">
            <a class="btn btn-homepage fw-medium text-lg text-white rounded-pill" href="../index.html"
                role="button">Lanjutkan</a>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>