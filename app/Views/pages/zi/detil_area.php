<!-- Load template -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 style="text-transform:uppercase;"><?= $area['name']; ?></h1>
                <p>Pemaparan Lembar Kerja Elektronik (LKE) Evaluasi Zona Integritas Menuju WBK/WBBM pada Pengadilan Negeri Payakumbuh berdasarkan <b><?= $area['name']; ?></b></p>
            </div>
            <a href="<?= $area['url']; ?>" target="_blank" class="btn btn-primary mb-3 text-center">Buka Folder <?= $area['name']; ?></a>

            <?php foreach ($pengungkit as $pg) { ?>
                <a class="navbar-menu col-lg-6" href="/zi/<?= $pg->area_slug; ?>/<?= $pg->id; ?>">
                    <div class="col-lg-12">
                        <div class="features-icons-item mx-auto p-5">
                            <div class="features-icons-icon d-flex"><i class="bi-files m-auto"></i></div>
                            <h5 style="text-transform:uppercase;">ASPEK <?= $pg->name; ?></h5>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
        <div class="row">

        </div>
    </div>
</section>

<?= $this->endSection(); ?>