<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Data User</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="/users/save" method="post">
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="first_name">First Name <i class="red-color">*</i></label>
                        <input type="text" class="form-control form-control-solid" id="first_name" name="first_name">
                    </div>
                    <div class="col">
                        <label for="last_name">Last Name <i class="red-color">*</i></label>
                        <input type="text" class="form-control form-control-solid" id="last_name" name="last_name">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="username">Username <i class="red-color">*</i></label>
                <input type="text" class="form-control form-control-solid" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="birthday">Birthday</label>
                <input type="date" class="form-control form-control-solid" id="birthday" name="birthday">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control form-control-solid" name="gender" id="gender">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>            
            </div>
            <div class="form-group">
                <label for="email">Email <i class="red-color">*</i></label>
                <input type="email" class="form-control form-control-solid" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password <i class="red-color">*</i></label>
                <input type="password" class="form-control form-control-solid" id="password" name="password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>



<?= $this->endSection(); ?>