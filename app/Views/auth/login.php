<?= $this->extend('auth/layout'); ?>

<?= $this->section('auth'); ?>
<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <?= session()->getFlashdata('message'); ?>
                  <form class="user" method="post" action="/auth/login">
                    <div class="form-group">
                      <input type="text" name="username" class="<?= ($validation->hasError('username'))? 'is-invalid':'';?> form-control form-control-user" id="exampleInputUsername" name="username" aria-describedby="emailHelp" placeholder="Enter Username...">
                      <div class="invalid-feedback">
                        <?= $validation->getError('username'); ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="<?= ($validation->hasError('password'))? 'is-invalid':'';?> form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                      <div class="invalid-feedback">
                        <?= $validation->getError('password'); ?>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    <hr>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="/register">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?= $this->endSection(); ?>