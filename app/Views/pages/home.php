<?= $this->extend('index'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row align-item-center my-5">
    <div class="col-lg-7">
      <img class="img-fluid rounded mb-4 mb-lg-0" src="/img/camera_thumbnail.jpg" alt="">
    </div>
    <div class="col-lg-5">
      <h1 class="font-weight-light">Cari Kamera Terbaikmu</h1>
      <p>Info menarik seputar dunia pemotretan</p>
      <a href="home/catalog" class="btn btn-primary">Cari Sekarang!</a>
    </div>
  </div>
  <div class="text-center mt-5 mb-5">
    <h1>Top 3 Kamera</h1>
  </div>
  <div class="row">
    <div class="col-md-4 mb-5">
      <div class="card shadow h-100">
        <div class="card-image">
          <img src="/img/1500d.jpg">
        </div>
        <div class="card-body">
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-5">
      <div class="card shadow h-100">
        <div class="card-image">

        </div>
        <div class="card-body">

        </div>
      </div>
    </div>
    <div class="col-md-4 mb-5">
      <div class="card shadow h-100">
        <div class="card-image">

        </div>
        <div class="card-body">

        </div>
      </div>
    </div>
  </div>
</div>


<?= $this->endSection(); ?>