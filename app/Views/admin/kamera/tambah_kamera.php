<?= $this->extend('admin/layout/template'); ?>



<?= $this->section('content'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Data Kamera</h1>
</div>

<div class="card shadow mb-4">
<div class="card-body">
<form action="/kamera/save" method="post">
<?= csrf_field(); ?>
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
    
    <button type="submit" class="btn btn-primary float-right ">Simpan</button>
</form>
</div>
</div>




<?= $this->endSection(); ?>