<body class="hold-transition skin-blue sidebar-mini">
<section class="wrapper" style="overflow:hidden">

  <header class="main-header">
    <!-- Logo -->
    <a href="assets/index2.html" class="logo">
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Trigo</b> Dashboard</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <section class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <section class="row">
                  <section class="col-sm-4 text-center">
                    <a href="#">Followers</a>
                  </section>
                  <section class="col-sm-4 text-center">
                    <a href="#">Sales</a>
                  </section>
                  <section class="col-sm-4 text-center">
                    <a href="#">Friends</a>
                  </section>
                </section>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <section class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </section>
                <section class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </section>
              </li>
            </ul>
          </li>
        </ul>
      </section>
    </nav>
  </header>
  <section class="content-wrapper">
    <section class="row">
        <section class="col-md-9 col-sm-8 col-xs-6">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <section class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </section>
                <section class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <?php foreach($categories as $key => $value):?>
                        <li><a href="#"><?=$value->name?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </section>
            </nav>
            <section class="row">
                <section class="col-sm-12">
                    <section class="products">
                        <?php foreach($products as $key => $value): ?>
                        <a href="#" class="item" data-item='<?=json_encode($value)?>'>
                            <section class="item-header">
                                <img src="<?=base_url()?>uploads/<?=$value->image_url?>"/>
                            </section>
                            <section class="item-body">
                                <h3><?=$value->name?></h3>
                            </section>
                        </a>
                        <?php endforeach; ?>
                    </section>
                </section>
            </section>
            <section class="navbar-bottom">
                <section class="row">
                    <section class="col-md-9 col-sm-8 col-xs-6">
                        <section class="customer">
                            <section class="lb">
                                <label>Customer</label>
                                <p>Walk-in Customer</p>
                            </section>
                            <section class="btn-ctm">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#search-customer">New</button>
                            </section>
                        </section>
                    </section>
                    <section class="col-md-3 col-sm-4 col-xs-6">
                        <section class="action">
                            <ul>
                                <li><a href="#"><i class="fa fa-sign-out"></i> Type</a></li>
                                <li><a href="#"><i class="fa fa-calendar-times-o"></i> Cancelar</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Limpiar</a></li>
                            </ul>
                        </section>
                        <section class="detail">
                            <section class="paying">
                                <p class="subtotal"><span>Subtotal: </span><span id="subtotal">0.00</span></p>
                                <p class="tax"><span>Impuesto: </span><span id="tax">0.00</span></p>
                                <p class="total"><span>Total: </span><span id="total">0.00</span></p>
                            </section>
                            <section class="btn-pay">
                                <button class="btn btn-primary" id="total">0.00</button>
                            </section>
                        </section>
                    </section>
                </section>
            </section>
        </section>
        <section class="col-md-3 col-sm-4 col-xs-6">
            <section class="sidebar-sales">
                <section class="sales">
                    <section class="sales-header">
                        <section class="form-group">
                            <input type="text" name="search" class="form-control" placeholder="Search Item"/>
                        </section>
                    </section>
                    <section class="sales-content">
                    </section>
                </section>
            </section>
        </section>
    </section>
  </section>
    <section class="modal fade" tabindex="-1" role="dialog" id="search-customer">
      <section class="modal-dialog" role="document">
        <section class="modal-content">
          <section class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Buscar cliente</h4>
          </section>
          <section class="modal-body">
            <form action="" method="POST">
                <section class="row">
                    <section class="col-md-12">
                        <secton class="form-group">
                            <label for="">Buscar cliente</label>
                            <select class="js-example-basic-single js-states form-control"></select>
                            
                        </secton>
                    </section>
                </section>
            </form>
          </section>
          <section class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </section>
        </section><!-- /.modal-content -->
      </section><!-- /.modal-dialog -->
    </section><!-- /.modal -->
