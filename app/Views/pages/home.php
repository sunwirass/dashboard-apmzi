<!-- Load template -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Masthead-->
<header class="masthead">
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="text-center text-white">
                    <!-- Page heading-->
                    <h1>DASHBOARD</h1>
                    <h3>AKREDITASI PENJAMINAN MUTU & ZONA INTEGRITAS</h3>
                    <h3>PENGADILAN NEGERI PAYAKUMBUH</h3>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Icons Grid-->
<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <a class="navbar-menu col-lg-6" href="#">
                <div class="col-lg-12">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-files m-auto"></i></div>
                        <h5 class="mb-5">ZONA INTEGRITAS</h5>
                        <p class="lead mb-0"><strong>Zona Integritas (ZI)</strong> adalah strategi percepatan Reformasi Birokrasi melalui pembangunan unit kerja pelayanan percontohan (role model) yang bebas dari korupsi (WBK) dan pelayanan yang prima (WBBM).</p>
                    </div>
                </div>
            </a>
            <a class="navbar-menu col-lg-6" href="#">
                <div class="col-lg-12">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-files m-auto"></i></div>
                        <h5 class="mb-5">AKREDITASI PENJAMINAN MUTU</h5>
                        <p class="lead mb-0"><strong>Akreditasi Penjaminan Mutu</strong> adalah suatu bentuk komitmen Mahkamah Agung, khususnya Badan Peradilan Umum Dalam Memberikan Pelayanan informasi kepada pencari keadilan.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>