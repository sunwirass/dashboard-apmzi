<!-- Load template -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>ZONA INTEGRITAS</h1>
                <p>Pemaparan Lembar Kerja Elektronik (LKE) Evaluasi Zona Integritas Menuju WBK/WBBM pada Pengadilan Negeri Payakumbuh</p>
            </div>
            <a href="https://drive.google.com/drive/folders/1_1VxgyH5RXjRf9dFPdi0u6cm98Yr_xcd?usp=drive_link" target="_blank" class="btn btn-primary mb-3 text-center">Buka Folder ZI</a>

            <?php for ($i = 1; $i <= 6; $i++) { ?>
                <a class="navbar-menu col-lg-4 mt-3" href="/zi/area-<?= $i; ?>">
                    <div class="col-lg-12">
                        <div class="features-icons-item mx-auto p-5">
                            <div class="features-icons-icon d-flex"><i class="bi-files m-auto"></i></div>
                            <h5 style="text-transform:uppercase;">Area <?= $i; ?></h5>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>