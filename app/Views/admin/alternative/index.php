<?= $this->extend('admin/layout/template'); ?>


<?= $this->section('content'); ?>
<div class="card shadow mb-4">
    <div class="card-header py-6">
        <a href="/alternative/delete" class="btn btn-icon-split btn-danger">
            <span class="icon "><i class="fas fa-trash"></i></span>
            <span class="text">Reset data alternative</span>
        </a>
        <a href="" class="btn btn-icon-split btn-success">
            <span class="icon "><i class="fas fa-calculator"></i></span>
            <span class="text">Compare</span>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Kamera</th>
                        <th>ISO</th>
                        <th>Resolusi</th>
                        <th>Ukuran sensor</th>
                        <th>Titik fokus</th>
                        <th>Kecepatan Shutter</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $index=1; ?>
                    <?php foreach($alternative as $alt) :?>
                    <tr>
                        <td><?= $index++; ?></td>
                        <td><?= $alt['kamera']; ?></td>
                        <td><?= $alt['iso']; ?></td>
                        <td><?= $alt['pixels']; ?> MP</td>
                        <td><?= $alt['sensor_size']; ?></td>
                        <td><?= $alt['focus']; ?></td>
                        <td><?= $alt['shutter']; ?> sec</td>
                        <td>Rp.<?= $alt['price']; ?></td>
                        <td>
                            <a href="/alternative/delete/<?= $alt['id_alternative']; ?>" class="btn btn-circle btn-danger">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>