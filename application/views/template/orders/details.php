<style>

    .grid {  
  max-width: 100%;
}

/* clearfix */
.grid:after {
  content: '';
  display: block;
  clear: both;
}

/* ---- grid-item ---- */

.grid-item { width: 267px; }

html, body {height: 100%;}

#wrap {min-height: 100%;}

#main {overflow:auto;
	padding-bottom: 180px;}  /* must be same height as the footer */

#footer {position: relative;
	margin-top: -180px; /* negative value of footer height */
	height: 180px;
	clear:both;
} 
      /*Opera Fix*/
 body:before {/* thanks to Maleika (Kohoutec)*/
        content:"";
        height:100%;
        float:left;
        width:0;
        margin-top:-32767px;/* thank you Erik J - negate effect of float*/
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

</style>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1><?=$title_page?> </h1>
    <small> </small>              
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Órdenes</li>
  </ol>
</section>

<section style="margin:15px;width: 100%;
    display: flex;list-style: none;justify-content: space-between;;
    padding: 10px;padding-RIGHT: 50px;margin-left: 0;">
    
    <div id="reportrange" class="btn-group" style="height:100%;margin-top:20px;margin-left: 20px;">
          <button type="button" class="btn btn-success"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp; Seleccionar Período</button>
          <button type="button" style="height:100%;padding-right:15px;" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
             <span></span> <b class="caret"></b>
            <span class="sr-only">Toggle Dropdown</span>
          </button>         
   </div>  
    
    <div class="pull-right" style="padding-rigt: 20px;display:inline-block">
        <a class="btn btn-app">
          <span id="number_of_orders" class="badge bg-teal"><?=$orders_number[0]->numero_ordenes?></span>
          <i class="fa fa-inbox"></i> Órdenes
        </a>

        <a class="btn btn-app">
          <span id="total_sales" class="badge bg-aqua">$<?=number_format($total_sales[0]->total_ventas, 2, '.', ',');?></span>
          <i class="fa fa-barcode"></i> Venta
        </a>

        <a class="btn btn-app">        
          <span id="products_sold" class="badge bg-purple"><?=$products_sold[0]->cantidad?></span>        
          <i class="fa fa-cubes"></i> Artículos
        </a>         
    </div>

    </section>            

<div id="wrap">
<div id="main">


<section class="content">
  <!-- Main content -->  
    <div class="grid ">
        <?php if (isset($data) && !(is_null($data))): foreach($data as $key => $value): ?>        
           
              <div class=" col-md-3 grid-item"> <!-- /.inicia tarjeta de orden -->
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Orden  <?=$value['orden'] > 1000 ? $value['orden'] : '#00' . $value['orden']?></h3>
                  <div class="box-tools">                
                    <span class="badge bg-green"><?=$value['status']?></span>
                  </div>
                  
                </div>            
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table">
                    <tbody><tr>
                      <th style="width: 10px">Cant.</th>
                      <th>Artículo</th>                                    
                      <th>Precio</th>            
                    </tr>
                      <?php foreach($value['detail'] as $key => $value1): ?>                      
                        <tr>
                          <td><?=$value1->cantidad?></td>
                          <td><?=$value1->producto?></td>                                      
                          <td><?=$value1->precio?></td>       
                        </tr>
                      <?php endforeach;?>        
                  </tbody></table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">  <!-- /.box-footer -->                              
                  <span class="pull-right"><b>Subtotal:</b> <?=number_format($value['subtotal'], 2, '.', ','); ?></span></br>              
                  <span class="pull-right"><b>ITBIS:</b> <?=number_format($value['itbis'], 2, '.', ','); ?></span></br>              
                  <span class="badge bg-aqua"><?=$value['fecha']?></span>
                  <span class="pull-right"><b>Total:</b> <?=number_format($value['itbis'] + $value['subtotal'], 2, '.', ','); ?></span>
                </div>              
                <!-- /.box-footer --> 
                <div class="box-footer clearfix">  <!-- /.box-footer -->
                  <ul class="pagination pagination-sm no-margin pull-left">
                    <li><span>Cliente: <?=$value['nombre_cliente'] =='Default' ? 'N/A' : $value['nombre_cliente'] . ' ' . $value['apellido_cliente'] ?></span></li>
                    <li><a href="#">Atendió: <?=$value['username']?></a></li>             
                  </ul>
                </div><!-- /.box-footer -->
              </div> <!-- /.box -->               
        </div><!-- /.termina tarjeta de orden -->                         

        <?php endforeach;endif;?>
    </div>
    </section>

  </div>

</div>
  <!-- /.content -->

<!-- /.loading waut dialog -->
  <section class="loading">
    <section class="icon-loading">
        <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
    </section>
</section>