<div class="card">
    <div class="card-body register-card-body" style="background-color: pink; border: 1px solid #ffffff;">
      <p class="login-box-msg">Register a new membership</p>

      <form action="../../index.html" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
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
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password">
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
            <button type="submit" class="btn btn-primary btn-block" style="background-color: #ff00ff; border: 1px solid #ffffff;">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <a href="<?= base_url('admin/login') ?>"style="color: #ff00ff;">Back to Login</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<head>
  <style>
    input.form-control, input.form-control:focus, textarea.form-control {
        background-color: #ffdbe6;
    }
  </style>
</head>