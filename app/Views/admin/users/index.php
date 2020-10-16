<?= $this->extend('admin/layout/template'); ?>


<?= $this->section('content'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><a href="users/tambah_user"><i class="fas fa-plus"></i> Tambah user</a></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <?php if($users ==  null): ?>
                <h1 class="text-center">Tidak ada data tersimpan!</h1>
            <?php else: ?>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Image</th>
                        <th>Fist Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>Birthday</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $index = 1; ?>
                    <?php foreach($users as $user): ?>
                        <tr>
                            <th><?= $index++; ?></th>
                            <th><img src="<?=$user['image']; ?>" alt="image"></th>
                            <th><?= $user['first_name']; ?></th>
                            <th><?= $user['last_name']; ?></th>
                            <th><?= $user['username']; ?></th>
                            <th><?= $user['birthday']; ?></th>
                            <th><?= $user['gender']; ?></th>
                            <th><?= $user['email']; ?></th>
                            <th><?= $user['password']; ?></th>
                            <th><a class="btn btn-circle btn-danger" href="#"><i class="fas fa-trash"></i></a></th>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>