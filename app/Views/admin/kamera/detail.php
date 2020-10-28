<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="col-sm-12 col-lg-4">
        <div class="card mb-4 shadow">
            <div class="card-header h3 text-center"><?= $kamera['brand'].' '.$kamera['type']; ?></div>
            <img src="/img/kamera/<?= $kamera['image']; ?>" alt="camera image" width="100%" height="100%" class="card-image">
            <div class="card-body">
                <div class="card-title h5 text-center">Rp. <?= $kamera['price']; ?></div>
            </div>
            <div class="card-footer">
                <a href="/kamera/edit/<?= $kamera['slug']; ?>" class="btn btn-icon-split btn-warning">
                    <span class="icon "><i class="fas fa-pen"></i></span>
                    <span class="text">Edit data kamera</span>
                </a>
            </div>
        </div>
        
    </div>
    <div class="col-sm-12 col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-header text-center">Deskripsi</div>
            <div class="card-body">
                <div class="card-text"><?= $kamera['description']; ?></div>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header text-center">Spesifikasi</div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tbody>
                        <tr class="text-center">
                            <td>Resolusi</td>
                            <td><?= $kamera['max_resolution']; ?></td>
                        </tr>
                        <tr class="text-center">
                            <td>Jumlah Pixels</td>
                            <td><?= $kamera['pixels']; ?></td>
                        </tr>
                        <tr class="text-center">
                            <td>Sensor size</td>
                            <td><?= $kamera['sensor_size']; ?></td>
                        </tr>
                        <tr class="text-center">
                            <td>ISO</td>
                            <td><?= $kamera['iso']; ?></td>
                        </tr>
                        <tr class="text-center">
                            <td>Lens Mount</td>
                            <td><?= $kamera['lens']; ?></td>
                        </tr>
                        <tr class="text-center">
                            <td>Titik Fokus</td>
                            <td><?= $kamera['focus']; ?></td>
                        </tr>
                        <tr class="text-center">
                            <td>Ukuran layar</td>
                            <td><?= $kamera['screen']; ?></td>
                        </tr>
                        <tr class="text-center">
                            <td>Shutter Speed</td>
                            <td><?= $kamera['shutter']; ?></td>
                        </tr class="text-center">
                        <tr class="text-center">
                            <td>Berat</td>
                            <td><?= $kamera['weight']; ?> gram</td>
                        </tr>
                        <tr class="text-center">
                            <td>Dimension</td>
                            <td>(<?= $kamera['dimension']; ?>) mm</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>