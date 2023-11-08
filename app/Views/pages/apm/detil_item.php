<!-- Load template -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="features-icons bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                <h2 class="text-center"><?= $kriteria_name; ?> - Checklist No. <?= $checklist_order; ?></h2>
                <h6 style="color: #C51605;">Penilaian : <?= $indikator['name']; ?></h6>
            </div>
            <table id="apm-item" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>INDIKATOR</th>
                        <th>LOKASI ASESMEN</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($item_list as $item) { ?>
                        <tr>
                            <td><?= $item->item_order; ?></td>
                            <td><?= $item->name; ?></td>
                            <td>
                                <ul>
                                    <?php foreach ($assessment_list as $al) { ?>
                                        <li><?= $al->responsible; ?></li>
                                    <?php } ?>
                                </ul>
                            </td>
                            <td><a href="<?= $item->url; ?>" target="_blank" class="btn btn-success text-center">Lihat Data Dukung</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="<?= $indikator['url']; ?>" target="_blank" class="btn btn-primary mt-3 text-center">Buka Folder Checklist No.<?= $checklist_order; ?></a>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>