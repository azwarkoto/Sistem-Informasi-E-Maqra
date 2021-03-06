<!DOCTYPE html>
<html>

<head>
  <title>Register</title>
  <?php $this->load->view('_template/header.php') ?>
</head>

<body class="hold-transition home-particles">
  <div class="login-box">
    <div class="login-logo">
      <a href="<?php echo base_url(); ?>"><b>Daftar Akun Baru</a>
    </div>

    <!-- /.login-logo -->
    <div class="login-box-body">
      <!-- <p class="login-box-msg">
          Log in to start your session
        </p> -->

      <form action="<?php echo base_url(); ?>index.php/User/daftar" method="post" enctype="multipart/form-data">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Nama" name="nama" required>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Daerah" name="daerah" required>
          <span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="number" class="form-control" placeholder="No Hp" name="nohp" required>
          <span class="glyphicon glyphicon-phone form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Email" name="email" required>
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="password" required>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="col-xs-offset-0 col-xs-12">
          <label for="exampleInputFile">Surat Mandat Sebagai Admin Kafilah</label>
          <input type="file" id="exampleInputFile" name="surat" required>
        </div>

        <div class="row">
          <!-- <div class="col-xs-8">
                  <div class="checkbox icheck">
                    <label>
                      <input type="checkbox"> Remember Me
                    </label>
                  </div>
                </div> -->
          <div class="col-xs-offset-8 col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
          </div>
        </div>
      </form>

      <!-- <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
            Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
            Google+</a>
        </div> -->
      <!-- /.social-auth-links -->

      <!-- <a href="#">I forgot my password</a><br>
        <a href="register.html" class="text-center">Register a new membership</a> -->

    </div>
    <!-- /.login-box-body -->
    <?php
    // echo show_err_msg($this->session->flashdata('error_msg'));
    ?>
  </div>
  <script>
    $('.home-particles').particleground({
      dotColor: '#fff',
      lineColor: '#555555',
      particleRadius: 6,
      curveLines: true,
      density: 10000,
      proximity: 110
    });;
    // });
  </script>
  <style type="text/css">
    .home-particles {
      background: #d2d6de;
      overflow: hidden;

    }

    .home-particles .pg-canvas {
      position: absolute;
      top: 0;
      left: 0;
      height: 100% !important;
      width: 100% !important;
      opacity: .52;
      background-image: url(<?php echo base_url(); ?>surat/themes10.jpg);
    }

    .home-particles .shadow-overlay {
      background: #d2d6de;
      display: none;
    }
  </style>

  <!-- /.login-box -->

  <?php $this->load->view('_template/footer.php') ?>
</body>

</html>