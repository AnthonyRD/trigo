<body class="hold-transition login-page">
<section class="login-box">
  <section class="login-logo">
    <a href="<?=base_url();?>"><b>Trigo</b> Dashboard</a>
  </section>
  <!-- /.login-logo -->
  <section class="login-box-body">
    <p class="login-box-msg">Resetear Password</p>

    <form action="../../index2.html" method="post">
      <section class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Usuario">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </section>
      <section class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password Anterior">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </section>
      <section class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password Nuevo">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </section>
      <section class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Confirmar Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </section>
      <section class="row">
        <section class="col-xs-8">          
        </section>
        <!-- /.col -->
        <section class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Log in</button>
        </section>
        <!-- /.col -->
      </section>
    </form>

    <a href="/login/forgot/password">Volver al inicio</a><br>

  </section>
  <!-- /.login-box-body -->
</section>
<!-- /.login-box -->
