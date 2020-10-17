<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="col-sm-4">
        <div class="card mb-4 shadow">
            <div class="card-header h3 text-center"><?= $kamera['brand'].' '.$kamera['type']; ?></div>
            <img src="/img/kamera/<?= $kamera['image']; ?>" alt="camera image" width="100%" height="300px" class="card-image">
            <div class="card-body">
                <div class="card-title h5 text-center">Rp. <?= $kamera['price']; ?></div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header text-center">Deskripsi</div>
            <div class="card-body">
                <div class="card-text"><?= $kamera['description']; ?></div>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header text-center">Spesifikasi</div>
            <div class="card-body">
                <div class="card-text">Resolusi     <?= $kamera['max_resolution']; ?></div>
                <div class="card-text">Jumlah Pixels     <?= $kamera['pixels']; ?> MP</div>
                <div class="card-text">Sensor Size     <?= $kamera['sensor_size']; ?></div>
                <div class="card-text">ISO     <?= $kamera['iso']; ?></div>
                <div class="card-text">Lens Mount     <?= $kamera['lens']; ?></div>
                <div class="card-text">Titik Fokus     <?= $kamera['focus']; ?></div>
                <div class="card-text">Screen     <?= $kamera['screen']; ?> Inch</div>
                <div class="card-text">Shutter     <?= $kamera['shutter']; ?></div>
                <div class="card-text">Berat     <?= $kamera['weight']; ?></div>
                <div class="card-text">Dimension     (<?= $kamera['dimension']; ?>) mm</div>


            </div>
        </div>
    </div>
    <div class="w-100">
    <div class="col">
       
    </div>  
    </div>
</div>

<?= $this->endSection(); ?>