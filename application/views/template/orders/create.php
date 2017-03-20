<?php
if (isset($this->session->userdata['logged_in'])) {
  $username = ($this->session->userdata['logged_in']['username']);
  $email = ($this->session->userdata['logged_in']['email']);
  $name = ($this->session->userdata['logged_in']['name']);
  $last_name = ($this->session->userdata['logged_in']['last_name']);
  $role = ($this->session->userdata['logged_in']['role']);
  $location_id = ($this->session->userdata['logged_in']['location_id']);
  $location = ($this->session->userdata['logged_in']['location']);
  $image_url = ($this->session->userdata['logged_in']['image_url']);  
} else {
  header("location: /trigo/account/login");
}
?>

    <style>
        .main-sidebar1 {
            width:370px !important;
        }
        .content-header > .breadcrumb {
          font-size: 16px;
          position: absolute;
          top: 0px;
          right: 0px;
          min-width: 100%;    
          background: #E1ECF4;
          padding: 10px;
          border-radius: 2px;
          min-width: 100%;
        }

        .breadcrumb {
          padding: 10px 20px;
          list-style: none;          
        }

        .content-header > .breadcrumb > li > a {
            color: #444;
            text-decoration: none;
            display: inline-block;            
            padding: 7px;
            text-transform: uppercase;
            margin-left: 90px;            
        }
        
        .content-header > .breadcrumb > li > a:hover {
            color: #888;         
        }

        .content-header { 
          margin-bottom: 40px;
        }
        
        .content-header > .breadcrumb > li + li:before {
            content:' ';
          }

        .content-wrapper1,
.right-side1,
.main-footer1 {
  -webkit-transition: -webkit-transform 0.3s ease-in-out, margin 0.3s ease-in-out;
  -moz-transition: -moz-transform 0.3s ease-in-out, margin 0.3s ease-in-out;
  -o-transition: -o-transform 0.3s ease-in-out, margin 0.3s ease-in-out;
  transition: transform 0.3s ease-in-out, margin 0.3s ease-in-out;
  margin-right: 270px;
  z-index: 820;
}

.main-footer1 {
  background: #3c8dbc;
  padding: 14px;
  color: #fff;  
  margin-right:270px;  
}
.main-sidebar1,
.right-side {
  position: absolute;
  top: 0;
  right: 0;
  padding-top: 50px;
  min-height: 100%;
  width: 270px;
  z-index: 810;
  -webkit-transition: -webkit-transform 0.3s ease-in-out, width 0.3s ease-in-out;
  -moz-transition: -moz-transform 0.3s ease-in-out, width 0.3s ease-in-out;
  -o-transition: -o-transform 0.3s ease-in-out, width 0.3s ease-in-out;
  transition: transform 0.3s ease-in-out, width 0.3s ease-in-out;
  background: #eff0f1;
}

.content-wrapper1, .right-side1 {
background-color: #fff;
}

.skin-blue .main-header .navbar {
    background-color: #367fa9;
}

.footer-right {
    position: fixed;
    height: 51px;
    bottom: 0;
    width: 100%;
    background: #3c8dbc;
    color:#fff;
    padding:10px;
}

/*Sample Content*/

/* Content */
.content section {
	font-size: 1em;	
	max-width: 1230px;
	margin: 0 auto;
}

.content section:before,
.content section:after {
	content: '';
	display: table;
}

.content section:after {
	clear: both;
}

/* Fallback example */
.no-js .content section {
	display: block;
	padding-bottom: 2em;
	border-bottom: 1px solid #47a3da;
}

.content section.content-current {
	display: block;
}

.mediabox {
	float: left;
	width: 33%;
	padding: 0 25px;
}

.mediabox img {
	max-width: 80%;
	display: block;
	margin: 0 auto;
}

.mediabox h3 {
	margin: 0.75em 0 0.5em;
}

.mediabox p {
	padding: 0 0 1em 0;
	margin: 0;
	line-height: 1.3;
}
label.button-pay {
    padding: 20px;
    background: #ddd;
    width: 100%;
    display: flex;
    justify-content: center;
    border: 1px solid #eee;
    cursor: pointer;
    font-size: 43px;
    height: 100px;
}

label.button-pay:active, label.button-pay:focus, label.button-pay:visited,label.button-pay.active {
    background: #eee;
}
/*End Sample Content*/

/*
 *  STYLE 4
 */

#style-4::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #F5F5F5;
}

#style-4::-webkit-scrollbar
{
	width: 10px;
	background-color: #F5F5F5;
}

#style-4::-webkit-scrollbar-thumb
{
	background-color: #ccc;
	border: 2px solid #555555;
}
.main-footer1 {
        position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
}
.my-navbar {
        margin: 0;
    border-radius: 0;
    border: 0;
    background: #E1ECF4;
}
.bt-row {
display: flex;
    justify-content: center;
    align-items: center;
    flex-flow: row wrap;
    padding:10px;
}
.content {
    min-height: 100%;
}
th {border: none;}

table {
    position: relative;
    width: 100%;
    height: auto;
    display: block;
}

thead {
    position: relative;
    width: 100%;
    display: block;
    border-top: 2px solid;
    border-bottom: 2px solid;
}

tr {
    position: relative;
    width: 100%;
    display: flex;
    justify-content: flex-start;
}

th:first-child {
    width: 60%;
}
th {
    width: 20%;
}

tbody {
    position: relative;
    width: 100%;
    display: block;
    border-bottom: 2px solid;
}

td:first-child {
    width: 60%;
}

td {
    width: 20%;
}
.print {
    display:none;
}
.total {
    position: relative;
    display: flex;
    justify-content: space-between;
}

.tendered {
    position: relative;
    display: flex;
    justify-content: space-between;
}

.exchanged {
    position: relative;
    display: flex;
    justify-content: space-between;
}

span.color-red {
    color: red;
}

span.color-green {
    color: green;
}

.total {
    position: relative;
    display: flex;
    justify-content: space-between;
}

.paymend-details {
    padding: 10px;
    position: relative;
    display: flex;
    width: 100%;
    flex-flow: column;
}
/*
    //////
*/
.ttotal {
    position: relative;
    display: flex;
    justify-content: space-between;
}

.ttendered {
    position: relative;
    display: flex;
    justify-content: space-between;
}

.texchanged {
    position: relative;
    display: flex;
    justify-content: space-between;
}
.tpaymend {
    width: 50%;
}
span.color-red {
    color: red;
}

span.color-green {
    color: green;
}

.ttotal {
    position: relative;
    display: flex;
    justify-content: space-between;
}

.tfooter {
    padding: 5px;
    position: relative;
    display: flex;
    width: 100%;
    flex-flow: column;
    align-items:flex-end;
}
.invoic {
    height: 235px;
    overflow: auto;
}
section#my0 {
    display: flex;
    justify-content: center;
}
.loading {
    
    position: absolute;
    top: 0;
    z-index: 99999;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.31);
    justify-content: center;
    align-items: center;
    display: none;

}
.loading .icon-loading {
    color: #fff;
}

html {
    overflow: scroll;
    overflow-x: hidden;
}
::-webkit-scrollbar {
    width: 0px;  /* remove scrollbar space */
    background: transparent;  /* optional: just make scrollbar invisible */
}
    </style>
<?php if(!isset($print)): ?>
<body class="hold-transition skin-yellow-light sidebar-mini">
<section class="wrapper" style="overflow:hidden">

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
                  <a id="logout" href="/account/login/logout" class="btn btn-default btn-flat">Salir</a>                  
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
                    <ul class="nav navbar-nav" id="category">
                        <?php foreach($categories as $key => $value):?>
                        <li><a href="#"><?=$value->name?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </section>
            </nav>
            
                <section class="row" >
                    <section class="col-sm-12">
                        <section class="products">
                            
                        </section>
                    </section>
                </section>
        
            <section class="navbar-bottom">
                <section class="row">
                    <section class="col-md-9 col-sm-8 col-xs-6">
                        <section class="customer">
                            <section class="lb">
                                <div id="customer_id" data-id="">
                                    <label>Cliente</label>
                                    <p id="customer"></p>
                                </div>
                            </section>
                            <section class="btn-ctm">
                                <button class="btn btn-success" data-toggle="modal" data-target="#search-customer">Buscar</button>
                            </section>                            
                            <section class="pull-right">                                
                                <input type="hidden" id="location_id" value="<?php echo $location_id ?>"/>                                                
                                <input type="hidden" id="username" value="<?php echo $username ?>"/>                                                                                                                                                                                                
                        </section>
                        </section>
                        
                    </section>
                    <section class="col-md-3 col-sm-4 col-xs-6">
                        <section class="action">
                            <ul>
                                <li><a href="#" data-toggle="modal" data-target="#tipo"><i class="fa fa-sign-out"></i> Servicio</a></li>
                                <li><a href="#" id="cancel"><i class="fa fa-calendar-times-o"></i> Cancelar</a></li>
                                <li><a href="#" id="clear"><i class="fa fa-circle-o"></i> Limpiar</a></li>
                            </ul>
                        </section>
                        <section class="detail">
                            <section class="paying">
                                <p class="subtotal"><span>Subtotal: </span><span id="subtotal">0.00</span></p>
                                <p class="tax"><span>ITBIS 18%: </span><span id="tax">0.00</span></p>
                                <p class="total"><span>Total: </span><span id="total">0.00</span></p>
                            </section>
                            <section class="btn-pay">
                                <button class="btn btn-success" id="total-btn">0.00</button>
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
                            <input type="text" id="search-item" name="search-item" class="form-control" placeholder="Buscar Item"/>
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
            <form action="" method="POST" id="search">
                <section class="row">
                    <section class="col-md-12">
                        <secton class="form-group">
                            <label for="">Buscar cliente</label>
                            <input type="text" name="search" class="form-control" placeholder="buscar" autocomplete="off"/>                            
                        </secton>
                    </section>
                </section>
            </form>
          </section>
          <section class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-success" id="add-customer">Añadir cliente</button>
          </section>
        </section><!-- /.modal-content -->
      </section><!-- /.modal-dialog -->
    </section><!-- /.modal -->
    <section class="modal fade" id="tipo" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
        <section class="modal-dialog" role="document">
            <section class="modal-content">
                <section class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Tipo de servicio</h4>
                </section>
                <section class="modal-body">
                    <section class="row">
                        <section class="col-md-12">
                            <h4>Seleccione un tipo de servicio</h4>
                            <section class="form-group">
                                <select name="tipo" class="form-control" id="input-tipo">
                                    <?php foreach($order_type as $key => $value):?>
                                    <option value="<?=$value->id?>"><?=$value->name?></option>
                                    <?php endforeach;?>
                                </select>
                            </section>
                        </section>
                    </section>
                </section>
                <section class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-success" id="add-type">Añadir</button>
                </section>
            </section><!-- /.modal-content -->
        </section><!-- /.modal-dialog -->
    </section><!-- /.modal -->
    <section class="modal fade" id="payModal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
        <section class="modal-dialog" role="document">
            <section class="modal-content">
                <section class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Pagar</h4>
                </section>
                <section class="modal-body">
                    <section class="row">
                        <section class="col-xs-6">
                            <section class="row">
                                <section class="col-xs-6">
                                    <section class="pay-type">
                                        <label class="button-pay active"><input type="radio" name="pay-type" style="display:none;" value="1"/> <i class="icon ion-cash"></i></label>
                                    </section>
                                </section>
                                <section class="col-xs-6">
                                    <section class="pay-type">
                                        <label class="button-pay"><input type="radio" name="pay-type" style="display:none;" value="3"/> <i class="fa fa-credit-card"></i></label>
                                    </section>
                                </section>
                            </section>
                        </section>
                        <section class="col-xs-6">
                            <section class="row">
                                <section class="invoic">
                                    <section class="headPay" style="display:none">
                                        <section class="column">
                                            <span>Atendió: Williams</span>
                                            <span>2017-02-06</span>
                                        </section>
                                        <section class="column">
                                            <span>Orden</span>
                                            <span>Factura #: 01</span>
                                        </section>
                                        <section class="column">
                                            <span>REG-012</span>
                                            <span>12:53</span>
                                        </section>
                                    </section>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Cant.</th>
                                                <th>Precio</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody class="itemPay">
                                            
                                        </tbody>
                                    </table>
                                    <section class="tfooter">
                                        <section class="tpaymend">
                                            <section class="ttotal">
                                                <span>Sub Total: </span>
                                                <span class="subtotalPay">0.00</span>
                                            </section>
                                            <section class="ttendered">
                                                <span>ITBIS 18%:</span>
                                                <span class="impuesto">0.00</span>
                                            </section>
                                            <section class="texchanged">
                                                <span>Total a pagar:</span>
                                                <span class="toPay">0.00</span>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                                <section class="row">
                                    <section class="col-xs-12">
                                        <section class="paymend-details">
                                            <section class="total">
                                                <span>Subtotal: </span>
                                                <span class="subtotalPay">0.00</span>
                                            </section>
                                            <section class="tendered">
                                                <span>ITBIS 18%:</span>
                                                <span class="color-red impuesto">0.00</span>
                                            </section>
                                            <section class="exchanged">
                                                <span>Total a pagar:</span>
                                                <span class="color-green toPay">0.00</span>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                            </section>
                        </section>
                    </section>
                </section>
                <section class="modal-footer" id="my0">
                    <button type="button" class="btn btn-default" id="confirm">Confirmar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </section>
            </section><!-- /.modal-content -->
        </section><!-- /.modal-dialog -->
    </section><!-- /.modal -->
<div class="modal fade" id="confirmM" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Efectivo</h4>
        </div>
        <div class="modal-body">
          <section class="row">
              <section class="col-md-12">
                  <section class="form-group">
                      <label for="">Efectivo a cuanto apagar</label>
                      <input type="text" name="efectivo" class="form-control" placeholder="Efectivo" />
                  </section>
              </section>
          </section>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" id="efectivo">Pagar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="cobro-invoice" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Factura</h4>
        </div>
        <div class="modal-body">
          <section class="row">
                        <section class="col-xs-8 col-xs-offset-2">
                            <section class="row">
                                <section class="invoic">
                                    <section class="headPay" style="display:none">
                                        <section class="column">
                                            <span>Atendió: Williams</span>
                                            <span>2017-02-06</span>
                                        </section>
                                        <section class="column">
                                            <span>Ordern</span>
                                            <span>Factura. #: 01</span>
                                        </section>
                                        <section class="column">
                                            <span>REG-012</span>
                                            <span>12:53</span>
                                        </section>
                                    </section>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Cant.</th>
                                                <th>Precio</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody class="itemPay">
                                            
                                        </tbody>
                                    </table>
                                    <section class="tfooter">
                                        <section class="tpaymend">
                                            <section class="ttotal">
                                                <span>Sub Total: </span>
                                                <span class="subtotalPay">0.00</span>
                                            </section>
                                            <section class="ttendered">
                                                <span>ITBIS 18%:</span>
                                                <span class="impuesto">0.00</span>
                                            </section>
                                            <section class="texchanged">
                                                <span>Total a pagar:</span>
                                                <span class="toPay">0.00</span>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                                <section class="row" id="hs">
                                    <section class="col-md-12">
                                        <section class="paymend-details">
                                            <section class="total">
                                                <span>Pago con: </span>
                                                <span class="pago">0.00</span>
                                            </section>
                                            <section class="tendered">
                                                <span>Devuelta:</span>
                                                <span class="color-red devuelta">0.00</span>
                                            </section>
                                            <section class="exchanged">
                                                <span>Total pagado:</span>
                                                <span class="color-green toPay">0.00</span>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                            </section>
                        </section>
                    </section>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" id="cobro">Pagar e Imprimir</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="loading">
    <section class="icon-loading">
        <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
    </section>
</section>
<?php else: ?>
<style>
    .wrapper {
        display:none;
    }
    .print {
        position:fixed;
        z-index:99999999999999;
        display: block;
        
    }
th {border: none;}

table {
    position: relative;
    width: 100%;
    height: auto;
    display: block;
}

thead {
    position: relative;
    width: 100%;
    display: block;
    border-top: 2px solid;
    border-bottom: 2px solid;
}

tr {
    position: relative;
    width: 100%;
    display: flex;
    justify-content: flex-start;
}

th:first-child {
    width: 60%;
}
th {
    width: 20%;
}

tbody {
    position: relative;
    width: 100%;
    display: block;
    border-bottom: 2px solid;
}

td:first-child {
    width: 60%;
}

td {
    width: 20%;
}
.headPay {
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}
.column {
    display: flex;
    flex-flow:column;
    justify-content:center;
    align-items:center;
}
#pay {
    display:none;
}
.box-print {
    position:relative;
    display:flex;
    justify-content: center;
    align-items:center;
    width:100%;
    height:100%;
        margin-top: 100px;
}
.box-print .print {
    width:167mm;
    height:173mm;
}
</style>
<section class="box-print">
<section class="print">

    <section class="headPay">
        <section class="column">
            <span>Atendió: <?php echo $username?></span>
            <span><?php echo date("d-m-Y, g:i a");?></span>
        </section>
        <section class="column">            
            <span>Orden #: 01</span>
        </section>
        <section class="column">
            <span>Tienda</span>
            <span><?php echo $location?></span>
        </section>
    </section>
    <table>
        <thead>
            <tr>
                <th>Item</th>
                <th>Cant.</th>
                <th>Precio</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody class="itemPays">
        </tbody>
    </table>
    <section class="tfooter">
        <section class="tpaymend">
            <section class="ttotal">
                <span>Sub Total: </span>
                <span class="subtotalPay">0.00</span>
            </section>
            <section class="ttendered">
                <span>ITBIS 18%:</span>
                <span class="impuesto">0.00</span>
            </section>
            <section class="texchanged">
                <span>Total a pagar:</span>
                <span class="toPay">0.00</span>
            </section>
        </section>
    </section>
</section>
</section>
<!--<script type="text/javascript">
    window.onload = function(){
    var item = null;
    var itemT = null;
    var subtotal = 0;
    var impuesto = 0;
    var total = 0;
    var itemPay = '<tr><td>{{nameProduct}}</td><td>{{qty}}</td><td>{{prece}}</td><td>{{total}}</td></tr>';
    var totalStorage = storage.get('total');
    if (storage.get('tipo') !== null){
        if(totalStorage != 0){
            $("#payModal").modal('show');
            $.each(storage.get('item'), function(index, value){
                subtotal += (value.price*value.unidad);
                impuesto += ((value.price*18/100)*value.unidad);
                console.log(impuesto);
                itemT = itemPay.replace("{{nameProduct}}", value.name);
                itemT = itemT.replace("{{qty}}", value.unidad);
                itemT = itemT.replace("{{prece}}", value.price);
                itemT = itemT.replace("{{total}}", (value.price*value.unidad));
                item += itemT;
            });
            total = (subtotal + impuesto);
            $(".itemPay, .itemPays").html(item);
            $(".subtotalPay").html(subtotal.toFixed(2));
            $(".impuesto").html(impuesto.toFixed(2));
            $(".toPay").html(total.toFixed(2));
        }else{
            alert('No hay ningun articulo en la cesta');
        }
    }else{
        $("#tipo").modal('show');
    }
        window.print();
        clear();
    }
</script>-->



<?php endif; ?>