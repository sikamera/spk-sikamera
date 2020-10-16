<?= $this->extend('admin/layout/template'); ?>


<?= $this->section('content'); ?>
    <h1 class="text-center">Data Kamera</h1>
    <div class="card mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="/kamera/tambah_kamera"><i class="fas fa-plus"></i> Tambah kamera</a></h6>
        </div>
        <div class="card-body">
            <?php if($kamera != null): ?>
            <div class="row">
                <?php foreach($kamera as $kam): ?>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card shadow h-100">
                        <a href="/kamera/<?= $kam['slug']; ?>">
                            <img src="/img/kamera/<?= $kam['image']; ?>" alt="thumbnail" class="card-img-top" width="50px" height="100%">
                        </a>
                        <div class="card-body">
                            <div class="card-title"><h3 class="text-center"><?= $kam['brand']." ".$kam['type']; ?></h3></div>
                        </div>
                        <div class="card-footer">
                            <a href="/" class="btn btn-circle btn-danger float-right"><i class="fas fa-trash"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php else: ?>
            <h1 class="text-center">Tidak ada data tersimpan!</h1>
            <?php endif; ?>
        </div>
    </div>

<?= $this->endSection(); ?>