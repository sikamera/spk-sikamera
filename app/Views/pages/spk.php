<?= $this->extend('index'); ?>

<?= $this->section('content'); ?>

<section id="subintro">
    <div class="container">
        <div class="row">
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#">SPK</a></li>
            </ul>
          </div>
        </div>
    </div>
</section>
<section id="maincontent">
    <div class="container">
      <div class="row">
      <div class="card">
        <div class="card-header">
          <a href="/alternative/delete" class="btn btn-danger"><i class="icon-minus-sign"></i> Reset data</a>
          <a href="/katalog" class="btn btn-success"><i class="icon-tasks"></i> Compare</a>
        </div>
        <div class="card-body">
          <?php if ($alternative):?>
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Alternatif</th>
                <?php foreach ($kriteria as $key => $value) {
                  echo "<th>".$value[1]."</th>";
                } ?>
              </tr>
            </thead>
            <tbody>
             <?php 
              $index = 1;
              foreach ($alternative as $alt => $value) {
                echo "<tr>";
                echo "<td>".$index++."</td>";
                for ($i=0; $i < count($value) ; $i++) { 
                  echo "<td>".$value[$i]."</td>";
                }
                echo "</tr>";
              }
             ?>
            </tbody>
          </table>
          <?php else: ?>
            <h1 class="text-center">Data alternatif kosong!</h1>
          <?php endif; ?>
        </div>
      </div>
      </div>

        <h4 class="rheading">Perhitungan MOORA<span></span></h4>
                <!-- start: Accordion -->
        <?php if ($alternative):?>
          <div class="accordion" id="accordion2">
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
								<i class="icon-minus"></i> Matriks Keputusan </a>
              </div>
              <div id="collapseOne" class="accordion-body collapse in">
                <div class="accordion-inner">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Alternatif</th>
                        <?php foreach ($kriteria as $key => $value) {
                            echo "<th>".$value[1]."</th>";
                        } ?>
                        
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($matriks as $key => $value) {
                          echo "<tr>";
                          echo "<td>".$alternative[$key][0]."</td>";
                          for ($i=1; $i<=count($value) ; $i++) { 
                            echo "<td>".$value[$i]."</td>";
                          }
                          echo "</tr>";
                        } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
									<i class="icon-plus"></i> Matriks Normalisasi </a>
                    </div>
                    <div id="collapseTwo" class="accordion-body collapse">
                      <div class="accordion-inner">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Alternatif</th>
                            <?php foreach ($kriteria as $key => $value) {
                              echo "<th>".$value[1]."</th>";
                            } ?>
                         </tr>
                        </thead>
                        <tbody>
                         <?php foreach ($normalisasi as $key => $value) {
                           echo "<tr>";
                           echo "<td>".$alternative[$key][0]."</td>";
                            for ($i=1; $i<=count($value) ; $i++) { 
                              echo "<td>".$value[$i]."</td>";
                            }
                            echo "</tr>";
                          } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
									  <i class="icon-plus"></i> Optimasi </a>
                </div>
                <div id="collapseThree" class="accordion-body collapse">
                  <div class="accordion-inner">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Alternatif</th>
                        <th>Nilai optimasi</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($optimasi as $key => $value) {
                          echo "<tr>";
                          echo "<td>".$alternative[$key][0]."</td>";
                          echo "<td>".$value."</td>";
                          echo "</tr>";
                        } ?>
                    </tbody>
                  </table>
                  </div>
              </div>
            </div>
          </div>
        <?php else: ?>
          <div class="row">
            <h1 class="text-center">Data kosong</h1>
          </div>
        <?php endif; ?>
    </div>
</section>


<?= $this->endSection(); ?>