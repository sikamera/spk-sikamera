<?= $this->extend('index'); ?>

<?= $this->section('content'); ?>

  <!-- Subintro
================================================== -->
<section id="subintro">
      <div class="container">
        <div class="row">
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="/home/catalog">Kamera</a><i class="icon-angle-right"></i></li>
              <li class="active"><?= $kamera['slug']; ?></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="maincontent">
      <div class="container">
        <div class="row">
          <div class="span12">
            <article>
              <div class="heading">
                <h4><?= $kamera['brand'].' '.$kamera['type']; ?></h4>
              </div>
              <div class="clearfix">
              </div>
              <div class="row">
                <div class="span8">
                  <!-- start flexslider -->
                  <div class="flexslider">
                    <img src="/img/kamera/<?= $kamera['image']; ?>" alt="" />                    
                  </div>
                  <!-- end flexslider -->
                  <p>
                    <?= $kamera['description']; ?>
                  </p>
                </div>
                <div class="span4">
                  <aside>
                    <div class="widget">
                      <div class="project-widget">
                        <h4 class="rheading">Spesifikasi<span></span></h4>
                        <ul class="project-detail">
                          <li><label>Brand              : </label><?= $kamera['brand']; ?></li>
                          <li><label>Tipe               : </label><?= $kamera['type']; ?></li>
                          <li><label>Tanggal rilis      : </label><?= $kamera['release_date']; ?></li>
                          <li><label>Harga              : </label><?= $kamera['price']; ?></li>
                          <li><label>Resolusi maksimal  : </label> <?= $kamera['max_resolution']; ?></li>
                          <li><label>Resolusi pixel     : </label><?= $kamera['pixels']; ?></li>
                          <li><label>Ukuran sensor      : </label><?= $kamera['sensor_size']; ?></li>
                          <li><label>ISO                : </label> <?= $kamera['min_iso'].'-'.$kamera['max_iso']; ?></li>
                          <li><label>Lensa              : </label><?= $kamera['lens']; ?></li>
                          <li><label>Titik fokus        : </label><?= $kamera['focus']; ?></li>
                          <li><label>Ukuran layar       : </label><?= $kamera['screen']; ?> inch</li>
                          <li><label>Kecepatan Shutter  : </label><?= $kamera['min_shutter'].'-'.$kamera['max_shutter']; ?></li>
                          <li><label>Berat              : </label><?= $kamera['weight']; ?> gram</li>
                          <li><label>Dimensi            : </label><?= $kamera['dimension']; ?> mm</li>
                          <li class="text-center"><a href="/home/compare/<?= $kamera['id_kamera']; ?>" class="btn btn-primary"><i class="icon-tasks"></i>Compare</a></li>
                        </ul>
                      </div>
                    </div>
                  </aside>
                </div>
              </div>
            </article>
            <!-- end article full post -->
          </div>
        </div>
      </div>
    </section>


<?= $this->endSection(); ?>