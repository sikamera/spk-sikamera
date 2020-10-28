<?= $this->extend('admin/layout/template'); ?>


<?= $this->section('content'); ?>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Kriteria</th>
                        <th>Keterangan</th>
                        <th>Bobot</th>
                        <th>Atribut</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $index=1; ?>
                    <?php foreach($kriteria as $krit) :?>
                    <tr>
                        <td><?= $index++; ?></td>
                        <td><?= $krit['id_criteria']; ?></td>
                        <td><?= $krit['information']; ?></td>
                        <td><?= $krit['weight']; ?></td>
                        <td><?= $krit['atribute']; ?></td>
                        <td><a href="/kriteria/editKriteria/<?= $krit['id_criteria']; ?>" class="btn btn-circle btn-success"><i class="fas fa-pen"></i></a></td>

                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>