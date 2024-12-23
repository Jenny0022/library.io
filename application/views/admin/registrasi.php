<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $judul; ?></title>
  <link rel="icon" type="image/x-icon" href="<?= base_url('dist/assets/favicon.ico') ?>" />

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('dist/assets/plugins/fontawesome-free/css/all.min.css') ?>">

  <!-- AdminLTE -->
  <link rel="stylesheet" href="<?= base_url('dist/assets/css/adminlte.min.css') ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <style>
    .login-page {
      background: linear-gradient(135deg, #4b79a1, #283e51);
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      font-family: "Source Sans Pro", sans-serif;
    }

    .login-box {
      width: 380px;
    }

    .card {
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    .card-header {
      text-align: center;
      background-color: #4b79a1;
      padding: 20px;
      color: white;
    }

    .card-header img {
      max-width: 80px;
      margin-bottom: 10px;
    }

    .login-box-msg {
      font-size: 1.1rem;
      color: #4b79a1;
    }

    .btn-primary {
      background-color: #4b79a1;
      border-color: #4b79a1;
      border-radius: 25px;
    }

    .btn-primary:hover {
      background-color: #283e51;
      border-color: #283e51;
    }

    .form-control {
      border-radius: 25px;
    }

    .input-group-text {
      background-color: #4b79a1;
      color: white;
    }

    a {
      color: #4b79a1;
    }

    a:hover {
      color: #283e51;
    }
  </style>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="card">
      <div class="card-header">
        <img src="<?= base_url('dist/assets/img2.webp') ?>" alt="Library Logo">
        <h2><?= $judul; ?></h2>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Register A New Membership</p>

        <?= $this->session->flashdata('message'); ?>
        
        <form action="<?= base_url('registrasi') ?>" method="post">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-user"></i>
              </div>
            </div>
            <input type="text" class="form-control" name="name" placeholder="Full name">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-envelope"></i>
              </div>
            </div>
            <input type="email" class="form-control" name="email" placeholder="Email">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-lock"></i>
              </div>
            </div>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text" id="toggle-password" style="cursor: pointer;">
                <i class="fas fa-eye" id="password-eye"></i>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-lock"></i>
              </div>
            </div>
            <input type="password" class="form-control" name="repassword" id="repassword" placeholder="Retype password">
            <div class="input-group-append">
              <div class="input-group-text" id="toggle-repassword" style="cursor: pointer;">
                <i class="fas fa-eye" id="repassword-eye"></i>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
          </div>
        </form>

        <p class="mb-0 mt-3 text-center">
          <a href="<?= base_url('login') ?>">Already have an account? Sign In</a>
        </p>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="<?= base_url('dist/assets/plugins/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('dist/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('dist/assets/js/adminlte.min.js') ?>"></script>

  <script>
    // Toggle password visibility for password field
    const togglePassword = document.getElementById('toggle-password');
    const passwordField = document.getElementById('password');
    const passwordEye = document.getElementById('password-eye');

    togglePassword.addEventListener('click', function() {
      const type = passwordField.type === 'password' ? 'text' : 'password';
      passwordField.type = type;
      passwordEye.classList.toggle('fa-eye');
      passwordEye.classList.toggle('fa-eye-slash');
    });

    // Toggle password visibility for repassword field
    const toggleRepassword = document.getElementById('toggle-repassword');
    const repasswordField = document.getElementById('repassword');
    const repasswordEye = document.getElementById('repassword-eye');

    toggleRepassword.addEventListener('click', function() {
      const type = repasswordField.type === 'password' ? 'text' : 'password';
      repasswordField.type = type;
      repasswordEye.classList.toggle('fa-eye');
      repasswordEye.classList.toggle('fa-eye-slash');
    });
  </script>
  
</body>
</html>
