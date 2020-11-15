<?= $this->extend('auth/layout'); ?>

<?= $this->section('auth'); ?>

<div class="container">


    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="post" action="/auth/save">
              <?= csrf_field(); ?>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="firstname" class="form-control form-control-user <?= ($validation->hasError('firstname'))? 'is-invalid':'';?>" id="exampleFirstName" placeholder="First Name" autofocus>
                    <div class="invalid-feedback">
                        <?= $validation->getError('firstname'); ?>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="lastname" class="form-control form-control-user <?= ($validation->hasError('lastname'))? 'is-invalid':'';?>" id="exampleLastName" placeholder="Last Name" autofocus>
                    <div class="invalid-feedback">
                        <?= $validation->getError('lastname'); ?>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="email" class="form-control form-control-user <?= ($validation->hasError('email'))? 'is-invalid':'';?>" id="email" placeholder="Email Address" autofocus>
                  <div class="invalid-feedback">
                    <?= $validation->getError('email'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password" class="<?= ($validation->hasError('password'))? 'is-invalid':'';?> form-control form-control-user" id="exampleInputPassword" placeholder="Password" autofocus>
                    <div class="invalid-feedback">
                        <?= $validation->getError('password'); ?>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" name="passwordconfirm" class="<?= ($validation->hasError('passwordconfirm'))? 'is-invalid':'';?> form-control form-control-user" id="exampleRepeatPassword" autofocus placeholder="Repeat Password">
                    <div class="invalid-feedback">
                        <?= $validation->getError('passwordconfirm'); ?>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
                <hr>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="/login">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>


<?= $this->endSection(); ?>