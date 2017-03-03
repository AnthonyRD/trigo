<body class="hold-transition login-page">
<section class="login-box">
  <section class="login-logo">
    <a href="<?=base_url();?>"><b>Trigo</b> Dashboard</a>
  </section>
  <!-- /.login-logo -->
  <section class="login-box-body">
    <p class="login-box-msg">Iniciar Sesión</p>

    <form action="../../index2.html" method="post">
      <section class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Usuario">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </section>
      <section class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
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
    </form>
<!--
    <section class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </section>-->
    <!-- /.social-auth-links -->

    <a href="/login/forgot/password">Olvidé mi Contraseña</a><br>

  </section>
  <!-- /.login-box-body -->
</section>
<!-- /.login-box -->
