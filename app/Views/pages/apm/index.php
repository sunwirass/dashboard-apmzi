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
            <a href="https://drive.google.com/drive/folders/1jTVBVVO4a9FjYf6djcZqT9CWOW2r8M8L?usp=drive_link" target="_blank" class="btn btn-primary mb-3 text-center">Buka Folder APM</a>

            <?php for ($i = 0; $i <= 6; $i++) { ?>
                <?php if ($i == 0) { ?>
                    <a class="navbar-menu col-lg-12" href="/apm/<?= $kriteria[$i]['slug']; ?>">
                        <div class="col-lg-12">
                            <div class="features-icons-item mx-auto p-5">
                                <div class="features-icons-icon d-flex"><i class="bi-files m-auto"></i></div>
                                <h5 style="text-transform:uppercase;"><?= $kriteria[$i]['name']; ?></h5>
                            </div>
                        </div>
                    </a>
                <?php } else { ?>
                    <a class="navbar-menu col-lg-4 mt-3" href="/apm/<?= $kriteria[$i]['slug']; ?>">
                        <div class="col-lg-12">
                            <div class="features-icons-item mx-auto p-5">
                                <div class="features-icons-icon d-flex"><i class="bi-files m-auto"></i></div>
                                <h5 style="text-transform:uppercase;"><?= $kriteria[$i]['name']; ?></h5>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>