<body class="hold-transition skin-blue sidebar-mini">
<section class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="assets/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>T</b>rigo</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Trigo</b> Dashboard</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <section class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
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
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <section class="user-panel">
        <section class="pull-left image">
          <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </section>
        <section class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </section>
      </section>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <section class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </section>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="/dashboard">
            <i class="fa fa-dashboard"></i> <span>Estadisticas</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cube"></i>
            <span>Productos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/products"><i class="fa fa-list-ol"></i> Administrar</a></li>
            <li><a href="/product/categories"><i class="fa fa-certificate"></i> Categorias</a></li>
          </ul>
        </li>       
        <li>
          <a href="/customers">
            <i class="fa fa-users"></i> <span>Clientes</span>
          </a>
        </li>
        <li>
          <a href="/suppliers">
            <i class="fa fa-truck"></i>
            <span>Suplidores</span>
          </a>
        </li>
        <li>
          <a href="/orders">
            <i class="fa fa-tasks"></i>
            <span>Ordenes</span>
          </a>
        </li>
        <li>
          <a href="/employes">
            <i class="fa fa-user"></i> <span>Usuarios</span>
          </a>
        </li>
        <li>
          <a href="/reports">
            <i class="fa fa-area-chart"></i> <span>Reportes</span>
          </a>
        </li>
        <li>
          <a href="/order/create">
            <i class="fa fa-shopping-cart"></i> <span>Venta</span>
          </a>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-gears"></i>
            <span>Configuraciones</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/departments"><i class="fa fa-cubes"></i> Departamentos</a></li>
            <li><a href="/positions"><i class="fa fa-book"></i> Posiciones</a></li>                        
            <li><a href="/employees"><i class="fa fa-asterisk"></i> Empleados</a></li>               
            <li><a href="/users"><i class="fa fa-users"></i> Usuarios</a></li>            
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <section class="content-wrapper">