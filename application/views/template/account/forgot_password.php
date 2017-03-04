<body class="hold-transition login-page">
<section class="login-box">
  <section class="login-logo">
    <a href="<?=base_url();?>" style="color:#fff;text-shadow: 1px 1px 1px #3a3a3a;"><b>Trigo</b> Dashboard</a>
  </section>
  <!-- /.login-logo -->
  <section class="login-box-body">
    <p class="login-box-msg">Recuperar mi password</p>

<?php echo form_open('#'); ?>
<?php
  echo "<div class='text-danger'>";
if (isset($error_message)) {
  echo $error_message;
}
  echo validation_errors();
  echo "</div>";
?>
<section class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </section>      
      <section class="row">
        <section class="col-xs-8">
          <section class="checkbox icheck">
            <label>
              <a href="/account/login/">Login</a><br>
            </label>
          </section>
        </section>
        <!-- /.col -->
        <section class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Recuperar</button>
        </section>
        <!-- /.col -->
      </section>
<?php echo form_close(); ?>   

  </section>
  <!-- /.login-box-body -->
</section>
<!-- /.login-box -->
