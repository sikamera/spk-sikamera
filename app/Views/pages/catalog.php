<?= $this->extend('index');; ?>


<?= $this->section('content'); ?>

<div class="container">
    <div class="text-center my-4 mb-4">
        <h1>Katalog Kamera</h1>
    </div>
    <div class="row">
        <div class="col-lg-2 mb-2">
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Brand Kamera
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Canon</a>
                    <a class="dropdown-item" href="#">Nikon</a>
                </div>
            </div>
        </div>
        <div class="col-lg-2 mb2">
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tipe sensor
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Crop Frame</a>
                    <a class="dropdown-item" href="#">Full Frame</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-4">
        <?php foreach($catalog as $cat): ?>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100 shadow">
                <a href="">
                    <img class="card-img-top" src="/img/kamera/<?= $cat['image']; ?>" alt="thumbnail kamera">
                </a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#"><?= $cat['brand'].' '.$cat['type']; ?></a>
                    </h4>
                    <?php 
                        $slice = substr($cat['description'],0,17);
                    ?>
                    <p class="card-text"><?= $slice; ?>
                    ...<a href="">selengkapnya</a></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>


<?= $this->endSection(); ?>