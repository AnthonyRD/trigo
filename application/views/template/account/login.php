<?php
  if (isset($this->session->userdata['logged_in'])) {
    header("location: http://localhost/login/index.php/login/user_login_process");
  }
?>
<body class="hold-transition login-page">
<?php
  if (isset($logout_message)) {
  echo "<div class='message'>";
  echo $logout_message;
  echo "</div>";
  }
?>
<?php
  if (isset($message_display)) {
  echo "<div class='message'>";
  echo $message_display;
  echo "</div>";
  }
?>
<section class="login-box">
  <section class="login-logo">
    <a href="<?=base_url();?>"><b>Trigo</b> Dashboard</a>
  </section>
  <!-- /.login-logo -->
  <section class="login-box-body">
    <p class="login-box-msg">Iniciar Sesión</p>    

	<hr/>
<?php echo form_open('account/login/user_login_process'); ?>
<?php
echo "<div class='error_msg'>";
if (isset($error_message)) {
echo $error_message;
}
echo validation_errors();
echo "</div>";
?>
<section class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Usuario">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </section>
      <section class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </section>
      <section class="row">
        <section class="col-xs-8">
          <section class="checkbox icheck">
            <label>
              <input type="checkbox"> Recordarme
            </label>
          </section>
        </section>
        <!-- /.col -->
        <section class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Log in</button>
        </section>
        <!-- /.col -->
      </section>
<?php echo form_close(); ?>
     
  <a href="/login/forgot/password">Olvidé mi Contraseña</a><br>
	<?php echo form_close(); ?>

  </section>
  <!-- /.login-box-body -->
</section>
<!-- /.login-box -->
