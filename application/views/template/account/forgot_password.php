<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?=base_url();?>" style="color:#fff;text-shadow: 1px 1px 1px #3a3a3a;"><b>Trigo</b> Dashboard</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Retrieve my password</p>

    <form action="../../index2.html" method="post">
        <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
        <!-- /.col -->
        <div class="col-xs-offset-8 col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Retrieve</button>
        </div>
    </form>
    <!-- /.social-auth-links -->
    <div class="row">
      <a href="/register" class="text-center">Register a new membership</a>
    </div>
    <div class="row">
      <a href="/login" class="text-center">Login</a>
    </div>
    

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
