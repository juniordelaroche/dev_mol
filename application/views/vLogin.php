<!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Codeigniter | Log in</title>
   <!-- Tell the browser to be responsive to screen width -->
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <!-- Bootstrap 3.3.7 -->
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
   <!-- iCheck -->
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/iCheck/square/blue.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Dev</b>MOL</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Logueate para iniciar sesión</p>

    <form action="<?php echo base_url() ?>cLogin/ingresar" method="POST">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="usuario" name="txtusuario">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="contraseña" name="txtclave">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-6">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
        <div>
          <a href="<?php echo base_url() ?>cUsuario" class="btn btn-success btn-flat">Registrarme</a>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->
    <hr>
    <a href="<?php echo base_url() ?>cPassword/forgotPass">Olvide mi contraseña</a>
    <b><?php echo $mensaje ?></b>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>

</body>
</html>

