<?= $this->extend('layout/template'); ?>



<?= $this->section('content'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Data Kamera</h1>
</div>

<div class="card">
<div class="card-body">
<form action="/kamera/save" method="post">
<?= csrf_field(); ?>
    <div class="form-group">
        <div class="custom-control custom-radio">
            <div class="row" style="margin: 0 auto;">
                <div class="col-xl-3 col-md-6 mb-4">
                    <input class="custom-control-input" value="Nikon" <?php if($brand == 'Nikon') echo 'checked="checked"'; ?> id="brand-nikon" type="radio" name="brand">
                    <label class="custom-control-label" for="brand-nikon">Nikon</label>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <input class="custom-control-input" id="brand-canon" value="Canon"  <?php if($brand == 'Canon') echo 'checked="checked"'; ?>  type="radio" name="brand">
                    <label class="custom-control-label" for="brand-canon">Canon</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h5 class="text-lg font-weight-800">Spesifikasi Teknis  :</h5>
            <div class="form-group">
                <label for="type">Tipe Kamera</label>
                <input type="text" name="type" id="type" class="form-control form-control-solid">
            </div>
            <div class="form-group">
                <label for="release_date">Tanggal rilis Kamera</label>
                <input type="date" name="release_date" id="realese_date" class="form-control form-control-solid">
            </div>
            <div class="form-group">
                <label for="price">Harga Kamera</label>
                <input type="number" name="price" id="price" class="form-control form-control-solid">
            </div>
            <div class="form-group">
                <label for="sensor_type">Tipe Sensor</label>
                <select name="sensor_type" id="sensor_type" class="form-control form-control-solid">
                    <option value="crop frame">APS-C/DX (crop frame)</option>
                    <option value="full frame">FX (full frame)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="resolution">Resolusi kamera</label>
                <input type="text" name="resolution" id="resolution" class="form-control form-control-solid">
            </div>
            <div class="form-group">
                <label for="iso">ISO kamera</label>
                <input type="text" name="iso" id="iso" class="form-control form-control-solid">
            </div>
            <div class="form-group">
                <label for="shutter">Shutter Speed kamera</label>
                <input type="text" name="shutter" id="shutter" class="form-control form-control-solid">
            </div>
            <div class="form-group">
                <label for="lcd">Ukuran layar</label>
                <input type="text" name="lcd" id="lcd" class="form-control form-control-solid">
            </div>
            <div class="form-group">
                <label for="video_resolution">Resolusi Video</label>
                <input type="text" name="video_resolution" id="video_resolution" class="form-control form-control-solid">
            </div>
            <div class="form-group">
                <label for="flash">Flash Kamera :</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" id="flashya" type="radio" name="flash">
                    <label class="custom-control-label" for="flashya">Ya</label>
                </div>
                <div class="custom-control custom-radio">  
                    <input class="custom-control-input" id="flashno" type="radio" name="flash">
                    <label class="custom-control-label" for="flashno">Tidak</label>
                </div>
            </div>
        </div>
        <div class="col">
            <h5 class="text-lg">Konektifitas :</h5>
            <div class="form-group">
                <label for="bluetooth">Bluetooth</label>
                <select name="bluetooth" id="bluetooth" class="form-control form-control-solid">
                    <option value="1">Ya</option>
                    <option value="0">tidak</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Wifi</label>
                <select name="wifi" id="wifi" class="form-control form-control-solid">
                    <option value="1">Ya</option>
                    <option value="0">tidak</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">NFC</label>
                <select name="nfc" id="nfc" class="form-control form-control-solid">
                    <option value="1">Ya</option>
                    <option value="0">tidak</option>
                </select>
            </div>
            <h5 class="text-lg">Dimensi :</h5>
            <div class="form-group">
                <label for="weight">Berat</label>
                <input type="number" name="weight" id="weight" class="form-control form-control-solid">
            </div>
            <div class="form-group">
                <label for="long">Panjang</label>
                <input type="number" name="long" id="long" class="form-control form-control-solid">
            </div>
            <div class="form-group">
                <label for="width">Lebar</label>
                <input type="number" name="width" id="width" class="form-control form-control-solid">
            </div>
            <div class="form-group">
                <label for="height">Tinggi</label>
                <input type="number" name="height" id="height" class="form-control form-control-solid">
            </div>

            <hr>

            <div class="form-group">
                <label for="image">Gambar</label>
                <input type="file" src="" alt="" id="image" name="image" class="form-control form-control-solid">
            </div>
        </div>
    </div>

   
    <div class="form-group"><label for="description">Deskripsi</label><textarea class="form-control form-control-solid" id="description" name="description" rows="3"></textarea></div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>




<?= $this->endSection(); ?>