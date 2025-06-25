<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon (Ikon di Tab Browser) -->
<link rel="icon" href="https://presensi.sman1sabang.sch.id/presensia.ico" type="image/x-icon">
    
    <!-- Metadata (Judul Halaman, Deskripsi, dan Kata Kunci) -->
    <meta name="description" content="Presensia adalah sebuah aplikasi untuk mencatat presensi
    berbasis web yang menggunakan tools berupa barcode scanner. Barcode tersebut terdapat
    pada kartu tiap civitas yang terhubung ke database pribadi civitas.">
    <meta name="keywords" content="presensi, barcode, php, sekolah">
    
    <!-- Thumbnail untuk Media Sosial (Misalnya, Facebook dan Twitter) -->
    <meta property="og:image" content="https://presensi.sman1sabang.sch.id/thumbnail_presensia.jpg">
    <meta property="og:title" content="Presensia sebuah aplikasi presensi berbasis web">
    <meta property="og:description" content="Presensia adalah sebuah aplikasi untuk mencatat presensi
    berbasis web yang menggunakan tools berupa barcode scanner. Barcode tersebut terdapat
    pada kartu tiap civitas yang terhubung ke database pribadi civitas.">
    <meta property="og:url" content="presensi.sman1sabang.sch.id">
  
  <title>Presensia | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
   <!-- SweetAlert2 -->
   <link rel="stylesheet" href="admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" />
   
</head>

<body class="hold-transition login-page">
  <!-- Preloader -->
  <div
        class="preloader flex-column justify-content-center align-items-center"
      >
        <img
          class="animation__shake"
          src="admin/dist/img/presensia.png"
          alt="presensia_logo"
          height="60"
          width="60"
        />
      </div>
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    
    <div class="card-header text-center">
    
      <a href="#" ><img src="admin/dist/img/presensia.png" alt="" height="60"
          width="60"/></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Login untuk memulai</p>

      <form action="config/autentikasi.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div> -->
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Log In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     <!-- <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

    <!--  <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div> -->
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/adminlte.min.js"></script>
<!-- SweetAlert2 -->
<script src="admin/plugins/sweetalert2/sweetalert2.min.js"></script>
</body>
<?php
    if (isset($_GET['error'])){
    $x = ($_GET['error']);
    if($x==1){
      echo "
    <script> var Toast = Swal.mixin({
        toast: true,
        position: 'center',
        showConfirmButton: false,
        timer: 3000
      });
      Toast.fire({
        icon: 'error',
        title: 'Login Gagal, Ulangi Lagi.'
      })
      </script>";
}
else if($x==2){
  echo "
 <script> var Toast = Swal.mixin({
    toast: true,
    position: 'center',
    showConfirmButton: false,
    timer: 3000
  });
  Toast.fire({
    icon: 'warning',
    title: 'Silakan masukkan username dan password.'
  })
  </script>";
}
else {
  echo '';
}}
?>
</html>
