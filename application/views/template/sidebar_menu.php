<?php
if (isset($this->session->userdata['logged_in'])) {
  $username = ($this->session->userdata['logged_in']['username']);
  $email = ($this->session->userdata['logged_in']['email']);
  $name = ($this->session->userdata['logged_in']['name']);
  $last_name = ($this->session->userdata['logged_in']['last_name']);
  $role = ($this->session->userdata['logged_in']['role']);
  $location = ($this->session->userdata['logged_in']['location']);
  $image_url = ($this->session->userdata['logged_in']['image_url']);  
} else {
  header("location: /trigo/account/login");
}
?>
<body class="hold-transition skin-yellow-light sidebar-mini">
<section class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="/trigo/dashboard" class="logo">
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
              <span class="hidden-xs"><?php echo $name . ' ' . $last_name?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $name . ' ' . $last_name?> - <?php echo $role?>
                  <small><?php echo $username?></small>
                </p>
              </li>                           
              <!-- Menu Footer-->
              <li class="user-footer">
                <section class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </section>
                <section class="pull-right">
                  <a id="logout" href="account/login/logout" class="btn btn-default btn-flat">Salir</a>                  
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
          <p><?php echo $name . ' ' . $last_name?> </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Activo</a>
        </section>
      </section>
      <!-- search form 
      <form action="#" method="get" class="sidebar-form">
        <section class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </section>
      </form>
       /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">NAVEGACION PRINCIPAL</li>
        <li>
          <a href="/trigo/dashboard">
            <i class="fa fa-dashboard"></i> <span>Indicadores</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cube"></i>
            <span>Productos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
	    <span class="pull-right-container">
              <span class="label bg-red pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/trigo/products"><i class="fa fa-list-ol"></i> Administrar Productos</a></li>
            <li><a href="/trigo/product/categories"><i class="fa fa-certificate"></i> Adnministar Categorias</a></li>
          </ul>
        </li>       
        <li>
          <a href="/trigo/customers">
            <i class="fa fa-users"></i> <span>Clientes</span>
          </a>
        </li>
        <li>
          <a href="/trigo/suppliers">
            <i class="fa fa-truck"></i>
            <span>Suplidores</span>
          </a>
        </li>            
        <li class="treeview">
          <a href="#">
            <i class="fa fa-tasks"></i>
            <span>Órdenes</span>
            <span class="pull-right-container">              
            </span>
	        <span class="pull-right-container">
              <span class="label bg-purple pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/trigo/orders"><i class="fa fa-list"></i> Ver Lista</a></li>
            <li><a href="/trigo/orders/details"><i class="fa fa-square-o"></i> Ver Detalles</a></li>                   
          </ul>
        </li>    
        <li>
          <a href="/trigo/reports">
            <i class="fa fa-area-chart"></i> <span>Reportes</span>
          </a>
        </li>
        <li>
          <a href="/trigo/order/create">
            <i class="fa fa-shopping-cart"></i> <span>Venta</span>
          </a>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-gears"></i>
            <span>Configuraciones</span>
            <span class="pull-right-container">              
            </span>
	        <span class="pull-right-container">
              <span class="label bg-green pull-right">5</span>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="/trigo/locations"><i class="fa fa-compass"></i> Localidades</a></li>
            <li><a href="/trigo/departments"><i class="fa fa-cubes"></i> Departamentos</a></li>
            <li><a href="/trigo/positions"><i class="fa fa-book"></i> Posiciones</a></li>                        
            <li><a href="/trigo/employees"><i class="fa fa-asterisk"></i> Empleados</a></li>               
            <li><a href="/trigo/users"><i class="fa fa-users"></i> Usuarios</a></li>            
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <section class="content-wrapper">
