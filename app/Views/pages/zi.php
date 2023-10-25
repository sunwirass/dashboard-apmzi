<!-- Load template -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>ZONA INTEGRITAS</h1>
                <p>Pemaparan checklist Zona Integritas pada Pengadilan Negeri Payakumbuh berdasarkan area pada masing-masing penilaian</p>
            </div>
            <a class="navbar-menu col-lg-4" href="/apm/kepemimpinan">
                <div class="col-lg-12">
                    <div class="features-icons-item mx-auto p-5">
                        <div class="features-icons-icon d-flex"><i class="bi-files m-auto"></i></div>
                        <h5>AREA I</h5>
                    </div>
                </div>
            </a>
            <a class="navbar-menu col-lg-4" href="/apm/manpro">
                <div class="col-lg-12">
                    <div class="features-icons-item mx-auto p-5">
                        <div class="features-icons-icon d-flex"><i class="bi-files m-auto"></i></div>
                        <h5>AREA II</h5>
                    </div>
                </div>
            </a>
            <a class="navbar-menu col-lg-4" href="/apm/renstra">
                <div class="col-lg-12">
                    <div class="features-icons-item mx-auto p-5">
                        <div class="features-icons-icon d-flex"><i class="bi-files m-auto"></i></div>
                        <h5>AREA III</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="row mt-2">
            <a class="navbar-menu col-lg-4" href="/apm/msdm">
                <div class="col-lg-12">
                    <div class="features-icons-item mx-auto p-5">
                        <div class="features-icons-icon d-flex"><i class="bi-files m-auto"></i></div>
                        <h5>AREA IV</h5>
                    </div>
                </div>
            </a>
            <a class="navbar-menu col-lg-4" href="/apm/kinerja">
                <div class="col-lg-12">
                    <div class="features-icons-item mx-auto p-5">
                        <div class="features-icons-icon d-flex"><i class="bi-files m-auto"></i></div>
                        <h5>AREA V</h5>
                    </div>
                </div>
            </a>
            <a class="navbar-menu col-lg-4" href="/apm/kwlayanan">
                <div class="col-lg-12">
                    <div class="features-icons-item mx-auto p-5">
                        <div class="features-icons-icon d-flex"><i class="bi-files m-auto"></i></div>
                        <h5>AREA VI</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>