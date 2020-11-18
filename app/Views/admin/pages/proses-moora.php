<?= $this->extend('admin/layout/template'); ?>


<?= $this->section('content'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-6">
        <a href="/alternative/delete" class="btn btn-icon-split btn-danger">
            <span class="icon "><i class="fas fa-trash"></i></span>
            <span class="text">Reset data alternative</span>
        </a>
        <a href="/kamera" class="btn btn-icon-split btn-primary">
            <span class="icon "><i class="fas fa-plus"></i></span>
            <span class="text">Tambah data alternative</span>
        </a>
    </div>
    <div class="card-body">
        <?php if($alternative != null):?>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
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
                      foreach ($alternative as $alt => $nilai) {
                          echo "<tr>";
                          echo "<td>".$index++."</td>";
                          for ($i=0; $i < count($nilai) ; $i++) { 
                            echo "<td>".$nilai[$i]."</td>";
                          }
                          echo "</tr>";
                      }
                    ?>
                </tbody>
            </table>
        <?php else: ?>
            <h1 class="text-center">Data alternative kosong</h1>
            <h6 class="text-center h2">klik tambah untuk menambahkan data!</h6>
        <?php endif; ?>
        </div>
    </div>
</div>

<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header bg-info text-white" id="headingOne">
      <h2 class="mb-0 inline">
        <a class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Matrik Keputusan
        </a>
        <div class="float-right"> 
          <a class="btn btn-lg btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
           <i class="fas fa-chevron-circle-down float-right"></i>
          </a>
        </div>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Alternatif</th>
                <?php 

                  foreach ($kriteria as $key => $value) {
                    echo "<th>".$value[1].' ('.$value[0].")</th>";
                  }
                
                ?>
              </tr>
            </thead>
            <tbody>
                <?php 

                  foreach ($matriks as $key => $value) {
                    echo "<tr>";
                    echo "<td>".$alternative[$key][0]."</td>";
                    for ($i=1; $i<=count($value) ; $i++) { 
                      echo "<td>".$value[$i]."</td>";
                    }
                    echo "</tr>";
                  }
            
                ?>

              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header bg-info text-white" id="headingTwo">
      <h2 class="mb-0">
        <a class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Matrik Normalisasi
        </a>
        <div class="float-right"> 
          <a class="btn btn-link btn-lg collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <i class="fas fa-chevron-circle-down float-right"></i>
          </a>
        </div>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Alternatif</th>
                <?php 

                  foreach ($kriteria as $key => $value) {
                    echo "<th>".$value[1].' ('.$value[0].")</th>";
                  }
                
                ?>
              </tr>
            </thead>
            <tbody>
                <?php 

                  foreach ($normalisasi as $key => $value) {
                    echo "<tr>";
                    echo "<td>".$alternative[$key][0]."</td>";
                    for ($i=1; $i<=count($value) ; $i++) { 
                      echo "<td>".$value[$i]."</td>";
                    }
                    echo "</tr>";
                  }
            
                ?>

              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header bg-info text-white" id="headingThree">
      <h2 class="mb-0">
        <a class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Nilai Optimasi
        </a>
        <div class="float-right"> 
          <a class="btn btn-link btn-lg collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <i class="fas fa-chevron-circle-down float-right"></i>
          </a>
        </div>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Alternatif</th>
                <th>Nilai Optimasi</th>
              </tr>
            </thead>
            <tbody>
                <?php 
                  foreach ($optimasi as $key => $value) {
                    echo "<tr>";
                    echo "<td>".$alternative[$key][0]."</td>";
                    echo "<td>".$value."</td>";
                    echo "</tr>";
                  }
                ?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>