<?= $this->extend('admin/layout/template'); ?>


<?= $this->section('content'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Users</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Fist Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>Birthday</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user): ?>
                        <tr>
                            <th><?= $user['first_name']; ?></th>
                            <th><?= $user['last_name']; ?></th>
                            <th><?= $user['username']; ?></th>
                            <th><?= $user['birthday']; ?></th>
                            <th><?= $user['gender']; ?></th>
                            <th><?= $user['email']; ?></th>
                            <th><?= $user['password']; ?></th>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>