<body class="hold-transition login-page">
<section class="register-box">
  <section class="register-logo">
    <a href="<?=base_url();?>"><b>Trigo</b> Dashboard</a>
  </section>

  <section class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="../../index.html" method="post">
      <section class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Full name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </section>
      <section class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </section>
      <section class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </section>
      <section class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </section>
      <section class="row">
        <section class="col-xs-8">
          <section class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </section>
        </section>
        <!-- /.col -->
        <section class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </section>
        <!-- /.col -->
      </section>
    </form>

    <section class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </section>

    <a href="/login" class="text-center">I already have a membership</a>
  </section>
  <!-- /.form-box -->
</section>
<!-- /.register-box -->

