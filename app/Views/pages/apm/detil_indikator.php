<!-- Load template -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 style="text-transform:uppercase;"><?= $kriteria['name']; ?></h1>
                <p>Pemaparan checklist Akreditasi Penjaminan Mutu pada Pengadilan Negeri Payakumbuh berdasarkan kriteria <b><?= $kriteria['name']; ?></b></p>
            </div>
            <a href="<?= $kriteria['url']; ?>" target="_blank" class="btn btn-primary mb-3 text-center">Buka Folder <?= $kriteria['name']; ?></a>

            <?php foreach ($indikator as $ind) { ?>
                <a class="navbar-menu col-lg-3" href="/apm/<?= $ind['slug']; ?>/<?= $ind['checklist_order']; ?>">
                    <div class="col-lg-12">
                        <div class="features-icons-item mx-auto p-5">
                            <div class="features-icons-icon d-flex"><i class="bi-files m-auto"></i></div>
                            <h5 style="text-transform:uppercase;">CHECKLIST NO. <?= $ind['checklist_order']; ?></h5>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>