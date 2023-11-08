<!-- Load template -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="features-icons bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                <h2 class="text-center"><?= $area['name']; ?> - <?= $area['area_desc']; ?></h2>
                <h6 style="color: #C51605;">Aspek : <?= $aspek_name; ?></h6>
            </div>
            <a href="<?= $aspek['url']; ?>" target="_blank" class="btn btn-primary mb-3 text-center">Buka Folder <?= $aspek_name; ?> <?= $area['name']; ?></a>

            <div class="accordion accordion-flush" id="accordionFlushExample">
                <?php foreach ($komponen as $k) { ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-<?= $k['id']; ?>" aria-expanded="false" aria-controls="flush-collapseOne">
                                <?= $k['name']; ?>
                            </button>
                        </h2>
                        <div id="flush-<?= $k['id']; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <table id="zi-item" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>INDIKATOR</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($item_list as $item) { ?>
                                            <?php if ($item->id_komponen == $k['id']) { ?>
                                                <tr>
                                                    <td><?= $item->item_order; ?></td>
                                                    <td><?= $item->name; ?></td>
                                                    <td><a href="<?= $item->url; ?>" target="_blank" class="btn btn-success text-center">Lihat Data Dukung</a></td>
                                                </tr>
                                            <?php } ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>