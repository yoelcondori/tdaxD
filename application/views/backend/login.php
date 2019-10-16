<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TDAbilioteca</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">

</head>
<body class="hold-transition login-page" style="background:url(https://articles-images.sftcdn.net/wp-content/uploads/sites/2/2017/05/wallpaper.jpg)">
  <nav class="navbar navbar-expand-lg " style="background-color:#2D265B">
  <div class="container">
    <center> <h1 style="color:#ffffff ; text-shadow: 1px 0px 3px #ffffff
          ;color: #ffffff">BIENVENIDO A TU BIBLIOTECA</h1></center>
  </div>
</nav>

<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url(); ?>cpanel"><h3 style="text-shadow: 1px 0px 3px #ffffff
          ;color: #ffffff">ingrese tus datos para iniciar secion</h3></a>
    <div>
          <a href="<?php echo base_url();?>backend/auth/butad"><button type="submit" class="btn btn-primary btn-block btn-flat">Administrador</button></a>
          <a href="<?php echo base_url();?>frontend/auth/login"><button type="submit" class="btn btn-primary btn-block btn-flat">Usuario</button></a>
    </div>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="background-color: #B7B4BA">
    <div class="card-header p-0">
      <div><h3 class="text-center background-primary">Administrador</h3></div>
                    <div class="bg-login-page text-white text-center py-2" style="background-color: #6F6974">
                        <h3 style="color: #ffffff"><i class="fa fa-user" style="color: #ffffff"></i> Login</h3>
                    </div>
                </div>

    <form action="<?php echo base_url() ?>backend/auth/login" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <p>email: "yoel@gmail.com"</p>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <p>password: "1234"</p>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block btn-flat">Acceder</button>
      </div>
      <?php if ($this->session->flashdata("error")): ?>
        <div class="alert alert-danger alert-dismissable text-justify">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <?php echo $this->session->flashdata("error"); ?>
      </div>
      <?php endif;?>

        <!-- /.col -->

    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
