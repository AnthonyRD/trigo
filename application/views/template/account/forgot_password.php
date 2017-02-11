<body class="hold-transition login-page">
<section class="login-box">
  <section class="login-logo">
    <a href="<?=base_url();?>" style="color:#fff;text-shadow: 1px 1px 1px #3a3a3a;"><b>Trigo</b> Dashboard</a>
  </section>
  <!-- /.login-logo -->
  <section class="login-box-body">
    <p class="login-box-msg">Retrieve my password</p>

    <form action="../../index2.html" method="post">
        <section class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </section>
        <!-- /.col -->
        <section class="col-xs-offset-8 col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Retrieve</button>
        </section>
    </form>
    <!-- /.social-auth-links -->
    <section class="row">
      <a href="/register" class="text-center">Register a new membership</a>
    </section>
    <section class="row">
      <a href="/login" class="text-center">Login</a>
    </section>
    

  </section>
  <!-- /.login-box-body -->
</section>
<!-- /.login-box -->
