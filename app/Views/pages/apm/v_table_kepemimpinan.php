<!-- Load template -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="mt-3">Kriteria Kepemimpinan - Checklist No. 1</h2>
            <p class="mb-5">Penilaian : Pelaksanaan Pengawasan dan Pembinaan sesuai dengan PERMA No. 7 Tahun 2016 dan SK KMA 071/KMA/SK/2008 tentang ketentuan penegakan disiplin kerja dalam pelaksanaan pemberian tunjangan khusus</p>
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>INDIKATOR A</th>
                        <th>LOKASI ASESMEN</th>
                        <th>LINK EVIDENCE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td><a href="" class="btn btn-success">Lihat</a></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>INDIKATOR A</th>
                        <th>LOKASI ASESMEN</th>
                        <th>LINK EVIDENCE</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>