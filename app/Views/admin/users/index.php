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
                            <td><?= $index++; ?></th>
                            <td><img class="rounded-circle" width="60px" height="60px" src="img/profile/<?= $user['image']; ?>" alt="image"></td>
                            <td><?= $user['first_name']; ?></td>
                            <td><?= $user['last_name']; ?></td>
                            <td><?= $user['username']; ?></td>
                            <td><?= ($user['birthday']==null)?'Undefined': $user['birthday']; ?></td>
                            <td>
                                <?php 
                                    if ($user['gender']!=null) {
                                        if ($user['gender']=="M") {
                                            echo "Male";
                                        }else {
                                            echo "Female";
                                        }
                                    }else {
                                        echo "Undefined";
                                    }
                                
                                ?>
                            </td>
                            <td><?= $user['email']; ?></td>
                            <td><?= ($user['password']!= null)?'********':'null'; ?></td>
                            <td>
                            <form action="/users/<?= $user['id_user']; ?>" method="post">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-circle btn-danger float-right"><i class="fas fa-trash"></i></button>
                            </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>