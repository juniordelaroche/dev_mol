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
    <b>Registrar</b>Usuario
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingrese los campos solicitados</p>

    <form action="<?php echo base_url() ?>cUsuario/datosUsuario" method="POST">
      <div class="form-group has-feedback">
      	
      		<span class="fa fa-user form-control-feedback"></span>
      		 <input type="text" class="form-control" placeholder="usuario" name="txtusuario" required="">
      	
      </div>
      <div class="form-group has-feedback">
      		<span class="fa fa-envelope form-control-feedback"></span>
      		<input type="text" class="form-control" placeholder="correo" name="txtcorreo" required="">
      </div>
      <div class="form-group has-feedback">
      		<span class="fa fa-lock form-control-feedback"></span>
      		<input type="password" class="form-control" placeholder="contraseña" name="txtpass" required="">
      </div>
      <!-- PREGUNTAS DE DESAFIO -->
      <hr>
      <label for="">Primera pregunta</label>
      <div class="form-group">
      	<select class="cboPregunta form-control" name="p1" id="">
      		<option value="">--Seleccione una pregunta--</option>
      	</select>
      </div>
      <div class="form-group has-feedback">
  		<span class="fa fa-pencil form-control-feedback"></span>
  		<input type="text" class="form-control" placeholder="respuesta" name="txtresp1" required="">
      </div>
      <label for="">Segunda pregunta</label>
      <div class="form-group">
      	<select class="cboPregunta form-control" name="p2" id="">
      		<option value="">--Seleccione una pregunta--</option>
      	</select>
      </div>
      <div class="form-group has-feedback">
      		<span class="fa fa-pencil form-control-feedback"></span>
      		<input type="text" class="form-control" placeholder="respuesta" name="txtresp2" required="">
      </div>
      <label for="">Tercera pregunta</label>
      <div class="form-group">
      	<select class="cboPregunta form-control" name="p3" id="">
      		<option value="">--Seleccione una pregunta--</option>
      	</select>
      </div>
      <div class="form-group has-feedback">
		<span class="fa fa-pencil form-control-feedback"></span>
		<input type="text" class="form-control" placeholder="respuesta" name="txtresp3" required="">
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-6">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
        </div>
        <div>
          <a href="<?php echo base_url() ?>cLogin" class="btn btn-success btn-flat">Iniciar sesión</a>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<script type="text/javascript">
  var baseurl = "<?php echo base_url(); ?>";
</script>
<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>
<?php if($this->uri->segment(1)=="cUsuario") {?>
  <script src="<?php echo base_url() ?>js/usuario.js"></script>
<?php }?>


</body>
</html>

