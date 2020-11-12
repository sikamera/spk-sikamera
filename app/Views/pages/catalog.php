<?= $this->extend('index');; ?>


<?= $this->section('content'); ?>

 <!-- Subhead
================================================== -->
<section id="subintro">
      <div class="container">
        <div class="row">
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#">Kamera</a><i class="icon-angle-right"></i></li>
              <li class="active">Catalog</li>
            </ul>
          </div>
          <div class="span4">
            <div class="search">
              <form class="input-append">
                <input class="search-form" id="appendedPrependedInput" type="text" placeholder="Search here.." />
                <button class="btn btn-dark" type="submit">Search</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

<section id="maincontent">
<div class="container">
   <div class="row">
          <div class="span12">
            <ul class="filter">
              <li class="all active"><a href="#" class="btn">All categories</a></li>
              <li class="nikon"><a href="#" class="btn">Nikon</a></li>
              <li class="canon"><a href="#" class="btn">Canon</a></li>
              <li class="fullFrame"><a href="#" class="btn">Full Frame</a></li>
              <li class="cropFrame"><a href="#" class="btn">Crop Frame</a></li>
            </ul>
        </div>
    </div>
  <div class="row">
    <ul class="portfolio-area da-thumbs">
        <?php foreach($catalog as $cat): ?>
      <li class="portfolio-item" data-id="id-0" data-type="<?= $cat['brand']; ?>">
        <div class="span3">
          <div class="thumbnail">
            <div class="image-wrapp">
              <img src="/img/kamera/<?= $cat['image']; ?>" alt="katalog name" title="" />
              <article class="da-animate da-slideFromRight">
                <a class="zoom" data-pretty="prettyPhoto" href="/img/kamera/<?= $cat['image']; ?>">
                        <i class="icon-bg-light icon-zoom-in icon-circled icon-2x"></i>
                        </a>
                <a href="portfolio-detail.html">
                        <i class="icon-bg-light icon-link icon-circled icon-2x"></i>
                        </a>
              </article>
            </div>
            <div class="desc">
              <h5><i class="icon-file"></i> <strong><?= $cat['brand'].' '.$cat['type']; ?></strong></h5>
              <p><?= substr($cat['description'],0,17); ?>...</p>
            </div>
          </div>
        </div>
      </li>
      <?php endforeach; ?>
    </ul>

  </div>
  <div class="row">
    <div class="span12">
        <div class="pagination">
            <ul>
                <li><a href="#">Prev</a></li>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </div>
    </div>
  </div>

</div>
</section>


<?= $this->endSection(); ?>