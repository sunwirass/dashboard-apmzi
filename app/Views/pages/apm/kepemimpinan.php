<!-- Load template -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>AKREDITASI PENJAMINAN MUTU</h1>
                <p>Pemaparan checklist Akreditasi Penjaminan Mutu pada Pengadilan Negeri Payakumbuh berdasarkan kriteria pada masing-masing penilaian</p>
            </div>
            <a class="navbar-menu col-lg-4" href="/apm/kepemimpinan">
                <div class="col-lg-12">
                    <div class="features-icons-item mx-auto p-5">
                        <div class="features-icons-icon d-flex"><i class="bi-files m-auto"></i></div>
                        <h5>KEPEMIMPINAN</h5>
                    </div>
                </div>
            </a>
            <a class="navbar-menu col-lg-4" href="/apm/manpro">
                <div class="col-lg-12">
                    <div class="features-icons-item mx-auto p-5">
                        <div class="features-icons-icon d-flex"><i class="bi-files m-auto"></i></div>
                        <h5>MANAJEMEN PROSES</h5>
                    </div>
                </div>
            </a>
            <a class="navbar-menu col-lg-4" href="/apm/renstra">
                <div class="col-lg-12">
                    <div class="features-icons-item mx-auto p-5">
                        <div class="features-icons-icon d-flex"><i class="bi-files m-auto"></i></div>
                        <h5>PERENCANAAN STRATEGIS</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="row mt-2">
            <a class="navbar-menu col-lg-3" href="/apm/msdm">
                <div class="col-lg-12">
                    <div class="features-icons-item mx-auto p-5">
                        <div class="features-icons-icon d-flex"><i class="bi-files m-auto"></i></div>
                        <h5>PENGELOLAAN SUMBER DAYA</h5>
                    </div>
                </div>
            </a>
            <a class="navbar-menu col-lg-3" href="/apm/kinerja">
                <div class="col-lg-12">
                    <div class="features-icons-item mx-auto p-5">
                        <div class="features-icons-icon d-flex"><i class="bi-files m-auto"></i></div>
                        <h5>HASIL KINERJA</h5>
                    </div>
                </div>
            </a>
            <a class="navbar-menu col-lg-3" href="/apm/kwlayanan">
                <div class="col-lg-12">
                    <div class="features-icons-item mx-auto p-5">
                        <div class="features-icons-icon d-flex"><i class="bi-files m-auto"></i></div>
                        <h5>KUALITAS PELAYANAN</h5>
                    </div>
                </div>
            </a>
            <a class="navbar-menu col-lg-3" href="/apm/dokumentasi">
                <div class="col-lg-12">
                    <div class="features-icons-item mx-auto p-5">
                        <div class="features-icons-icon d-flex"><i class="bi-files m-auto"></i></div>
                        <h5>DOKUMENTASI / ARSIP</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>