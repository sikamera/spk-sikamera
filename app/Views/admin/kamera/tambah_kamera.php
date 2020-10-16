<?= $this->extend('admin/layout/template'); ?>



<?= $this->section('content'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Data Kamera</h1>
</div>

<div class="card shadow mb-4">
<div class="card-body">
<form action="/kamera/save" method="post">
<?= csrf_field(); ?>
<div class="card">
    <div class="card-header border-bottom">
        <ul class="nav nav-tabs card-header-tabs" id="cardTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="overview-tab" href="#overview" data-toggle="tab" role="tab" aria-controls="overview" aria-selected="true">Brand</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="example-tab" href="#example" data-toggle="tab" role="tab" aria-controls="example" aria-selected="false">Spesifik</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content" id="cardTabContent">
            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <select name="brand" id="brand" class="form-control form-control-solid">
                        <option value="Nikon">Nikon</option>
                        <option value="Canon">Canon</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="type">Tipe Kamera</label>
                    <input type="text" id="type" name="type" class="form-control">
                </div>
                <div class="form-group">
                    <label for="release_date">Tanggal rilis</label>
                    <input type="date" id="release_date" name="release_date" class="form-control">
                </div>
                <div class="form-group">
                    <label for="price">Harga Kamera</label>
                    <input type="text" id="price" name="price" class="form-control">
                </div>
                <div class="form-group">
                    <label for="image">Gambar </label>
                    <input type="file" id="image" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>    
                </div>
            </div>
            <div class="tab-pane fade" id="example" role="tabpanel" aria-labelledby="example-tab">
                <div class="form-group">
                    <label for="max_resolution">Max Resolusi</label>
                    <input type="text" id="max_resolution" name="max_resolution" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pixels">Ukuran pixel</label>
                    <input type="text" id="pixels" name="pixels" class="form-control">
                </div>
                <div class="form-group">
                    <label for="sensor_size">Sensor size</label>
                    <select name="sensor_size" id="sensor_size" class="form-control form-control-solid">
                        <option value="crop frame">APS-C (Crop Frame)</option>
                        <option value="full frame">Full Frame</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="iso">ISO</label>
                    <input type="text" id="iso" name="iso" class="form-control">
                </div>
                <div class="form-group">
                    <label for="lens">Lensa Mount</label>
                    <input type="text" id="lens" name="lens" class="form-control">
                </div>
                <div class="form-group">
                    <label for="focus">Jumlah titik fokus</label>
                    <input type="text" id="focus" name="focus" class="form-control">
                </div>
                <div class="form-group">
                    <label for="screen">Layar</label>
                    <input type="text" id="screen" name="screen" class="form-control">
                </div>
                <div class="form-group">
                    <label for="shutter">Shutter</label>
                    <input type="text" id="shutter" name="shutter" class="form-control">
                </div>
                <div class="form-group">
                    <label for="weight">Weight</label>
                    <input type="text" id="weight" name="weight" class="form-control">
                </div>
                <div class="form-group">
                    <label for="dimension">Dimensi</label>
                    <input type="text" id="dimension" name="dimension" class="form-control">
                </div>
            </div>
        </div>
    </div>
</div>
    <button type="submit" class="btn btn-primary float-right mt-4">Simpan</button>
</form>
</div>
</div>




<?= $this->endSection(); ?>