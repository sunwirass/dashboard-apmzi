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
            <div class="col-sm-6">
                <div class="card">
                    <img src="<?= base_url() ?>img/bg-card-1.png" class="card-img-top" alt="Logo ZI">
                    <div class="card-body">
                        <h3 class="card-title">ZONA INTEGRITAS</h3>
                        <p class="card-text">Zona Integritas (ZI)</strong> adalah strategi percepatan Reformasi Birokrasi melalui pembangunan unit kerja pelayanan percontohan (role model) yang bebas dari korupsi (WBK) dan pelayanan yang prima (WBBM).</p>
                        <a href="/zi" class="btn btn-primary">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <img src="<?= base_url() ?>img/bg-card-2.png" class="card-img-top" alt="Logo APM">
                    <div class="card-body">
                        <h3 class="card-title">AKREDITASI PENJAMINAN MUTU</h3>
                        <p class="card-text"><strong>Akreditasi Penjaminan Mutu</strong> adalah suatu bentuk komitmen Mahkamah Agung, khususnya Badan Peradilan Umum Dalam Memberikan Pelayanan informasi kepada pencari keadilan.</p>
                        <a href="/apm" class="btn btn-primary">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>