<?= $this->extend('admin/layout/template'); ?>



<?= $this->section('content'); ?>

<div class="card shadow mb-4">
    <div class="card-header h3">
        Edit Kriteria
    </div>
    <div class="card-body">
        <form action="/home/update/<?= $kriteria['id_criteria']; ?>" method="post">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label for="information">Kriteria</label>
                <input disabled class="form-control" type="text" name="information" id="information" value="<?= $kriteria['information']; ?>">
            </div>
            <div class="form-group">
                <label for="weight">Bobot Kriteria</label>
                <input autofocus class="form-control <?= ($validation->hasError('weight')) ? 'is-invalid' : ''; ?>" type="number" name="weight" id="weight" value="<?= $kriteria['weight']; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('price'); ?>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" value="Cost" id="cost" type="radio" name="atribute"
                    <?= ($kriteria['atribute']=='Cost') ? "checked":""; ?>>
                    <label class="form-check-label" for="cost">Cost</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" value="Benefit" id="benefit" type="radio" name="atribute"
                    <?= ($kriteria['atribute']=='Benefit') ? "checked":""; ?>>
                    <label class="form-check-label" for="benefit">Benefit</label>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-warning btn-lg" type="submit">Edit</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>