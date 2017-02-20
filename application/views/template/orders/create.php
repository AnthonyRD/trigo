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
    </style>
<style media="print">
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
</style>
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
                                <p id="customer">Walk-in Customer</p>
                            </section>
                            <section class="btn-ctm">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#search-customer">New</button>
                            </section>
                        </section>
                    </section>
                    <section class="col-md-3 col-sm-4 col-xs-6">
                        <section class="action">
                            <ul>
                                <li><a href="#" data-toggle="modal" data-target="#tipo"><i class="fa fa-sign-out"></i> Type</a></li>
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
                                <button class="btn btn-primary" id="total-btn">0.00</button>
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
            <form action="" method="POST" id="search">
                <section class="row">
                    <section class="col-md-12">
                        <secton class="form-group">
                            <label for="">Buscar cliente</label>
                            <input type="text" name="search" class="form-control" placeholder="search" autocomplete="off"/>
                            
                        </secton>
                    </section>
                </section>
            </form>
          </section>
          <section class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="add-customer">Añadir cliente</button>
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
                            <h4>Seleccione un tipo</h4>
                            <section class="form-group">
                                <select name="tipo" class="form-control selectpicker" data-live-search="true">
                                    <option value="0">Orders Type</option>
                                    <option value="1">Eat In</option>
                                    <option value="2">To Go</option>
                                    <option value="3">Drive Throught</option>
                                    <option value="4">Drive Order</option>
                                </select>
                            </section>
                        </section>
                    </section>
                </section>
                <section class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="add-type">Add type</button>
                </section>
            </section><!-- /.modal-content -->
        </section><!-- /.modal-dialog -->
    </section><!-- /.modal -->
    <section class="modal fade" id="payModal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
        <section class="modal-dialog" role="document">
            <section class="modal-content">
                <section class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Pay</h4>
                </section>
                <section class="modal-body">
                    <section class="row">
                        <section class="col-md-6">
                            <section class="row">
                                <section class="col-md-6">
                                    <section class="pay-type">
                                        <label class="button-pay active"><input type="radio" name="pay-type" style="display:none;" value="cash"/> <i class="icon ion-cash"></i></label>
                                    </section>
                                </section>
                                <section class="col-md-6">
                                    <section class="pay-type">
                                        <label class="button-pay"><input type="radio" name="pay-type" style="display:none;" value="fiao"/> <i class="fa fa-credit-card"></i></label>
                                    </section>
                                </section>
                            </section>
                        </section>
                        <section class="col-md-6">
                            <section class="row">
                                <section class="invoic">
                                    <section class="headPay" style="display:none">
                                        <section class="column">
                                            <span>Served by: Williams</span>
                                            <span>2017-02-06</span>
                                        </section>
                                        <section class="column">
                                            <span>Orders</span>
                                            <span>Invoice #: 01</span>
                                        </section>
                                        <section class="column">
                                            <span>REG-012</span>
                                            <span>12:53</span>
                                        </section>
                                    </section>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Qty</th>
                                                <th>Price</th>
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
                                                <span>Impuesto:</span>
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
                                    <section class="col-md-12">
                                        <section class="paymend-details">
                                            <section class="total">
                                                <span>Subtotal: </span>
                                                <span class="subtotalPay">0.00</span>
                                            </section>
                                            <section class="tendered">
                                                <span>Impuesto:</span>
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
                    <button type="button" class="btn btn-default" id="pay">Pay</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </section>
            </section><!-- /.modal-content -->
        </section><!-- /.modal-dialog -->
    </section><!-- /.modal -->
<section class="print">

    <section class="headPay">
        <section class="column">
            <span>Served by: Williams</span>
            <span>2017-02-06</span>
        </section>
        <section class="column">
            <span>Orders</span>
            <span>Invoice #: 01</span>
        </section>
        <section class="column">
            <span>REG-012</span>
            <span>12:53</span>
        </section>
    </section>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Qty</th>
                <th>Prece</th>
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
                <span>Impuesto:</span>
                <span class="impuesto">0.00</span>
            </section>
            <section class="texchanged">
                <span>Total a pagar:</span>
                <span class="toPay">0.00</span>
            </section>
        </section>
    </section>
</section>