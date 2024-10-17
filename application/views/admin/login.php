 
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body" style="background-color: pink; border: 1px solid #ffffff;">
      <p class="login-box-msg">Sign in your account</p>

      <form action="<?= base_url('admin/login'); ?>" method="post">
        <div class="input-group mb-3">
          <input type="username" class="form-control" placeholder="Username" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" style="background-color: #ff00ff; border: 1px solid #ffffff;">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <p class="mb-1">
        <a href="<?= base_url('beranda') ?>" style="color: #ff00ff;">Back To Beranda</a>
      </p>
      <p class="mb-0">
        <a href="<?= base_url('admin/registrasi') ?>" class="text-center" style="color: #ff00ff;">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<head>
  <style>
    input.form-control, input.form-control:focus, textarea.form-control {
        background-color: #ffdbe6;
    }
  </style>
</head>