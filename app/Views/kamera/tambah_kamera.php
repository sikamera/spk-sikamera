<?= $this->extend('layout/template'); ?>



<?= $this->section('content'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Data Kamera</h1>
</div>

<div class="card">
<div class="card-body">
<form>
    <div class="form-group">
        <div class="custom-control custom-radio">
            <div class="row" style="margin: 0 auto;">
                <div class="col-xl-3 col-md-6 mb-4">
                    <input class="custom-control-input" id="customRadio1" type="radio" name="customRadio">
                    <label class="custom-control-label" for="customRadio1">Nikon</label>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <input class="custom-control-input" id="customRadio2" type="radio" name="customRadio">
                    <label class="custom-control-label" for="customRadio2">Canon</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h5 class="text-lg font-weight-800">Spesifikasi Teknis  :</h5>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Tipe Kamera</label>
                <input type="text" name="tipe-kamera" id="tipe-kamera" class="form-control form-control-solid">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Tanggal rilis Kamera</label>
                <input type="date" name="tipe-kamera" id="tipe-kamera" class="form-control form-control-solid">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Harga Kamera</label>
                <input type="number" name="harga" id="harga" class="form-control form-control-solid">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Tipe Sensor</label>
                <select name="" id="" class="form-control form-control-solid">
                    <option value="">APS-C/DX (crop frame)</option>
                    <option value="">FX (full frame)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Resolusi kamera</label>
                <input type="text" name="" id="" class="form-control form-control-solid">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">ISO kamera</label>
                <input type="text" name="" id="" class="form-control form-control-solid">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Shutter Speed kamera</label>
                <input type="text" name="" id="" class="form-control form-control-solid">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Ukuran layar</label>
                <input type="text" name="" id="" class="form-control form-control-solid">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Resolusi Video</label>
                <input type="text" name="" id="" class="form-control form-control-solid">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Flash Kamera :</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" id="customRadio3" type="radio" name="customRadio">
                    <label class="custom-control-label" for="customRadio3">Ya</label>
                </div>
                <div class="custom-control custom-radio">  
                    <input class="custom-control-input" id="customRadio4" type="radio" name="customRadio">
                    <label class="custom-control-label" for="customRadio4">Tidak</label>
                </div>
            </div>
        </div>
        <div class="col">
            <h5 class="text-lg">Konektifitas :</h5>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Bluetooth</label>
                <select name="" id="" class="form-control form-control-solid">
                    <option value="">Ya</option>
                    <option value="">tidak</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Wifi</label>
                <select name="" id="" class="form-control form-control-solid">
                    <option value="">Ya</option>
                    <option value="">tidak</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">NFC</label>
                <select name="" id="" class="form-control form-control-solid">
                    <option value="">Ya</option>
                    <option value="">tidak</option>
                </select>
            </div>
            <h5 class="text-lg">Dimensi :</h5>
            <div class="form-group">
                <label for="">Berat</label>
                <input type="number" name="" id="" class="form-control form-control-solid">
            </div>
            <div class="form-group">
                <label for="">Panjang</label>
                <input type="number" name="" id="" class="form-control form-control-solid">
            </div>
            <div class="form-group">
                <label for="">Lebar</label>
                <input type="number" name="" id="" class="form-control form-control-solid">
            </div>
            <div class="form-group">
                <label for="">Tinggi</label>
                <input type="number" name="" id="" class="form-control form-control-solid">
            </div>

            <hr>

            <div class="form-group">
                <label for="">Gambar</label>
                <input type="file" src="" alt="" class="form-control form-control-solid">
            </div>
        </div>
    </div>

   
    <div class="form-group"><label for="exampleFormControlTextarea1">Deskripsi</label><textarea class="form-control form-control-solid" id="exampleFormControlTextarea1" rows="3"></textarea></div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>




<?= $this->endSection(); ?>