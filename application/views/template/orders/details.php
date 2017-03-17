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

.grid-item {
  margin:0px !important;
}

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

</style>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?=$title_page?>
    <small> </small>   

      <div class="btn-group">
          <button type="button" class="btn btn-success">Seleccionar Período</button>
          <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Día</a></li>
            <li><a href="#">Semana</a></li>
            <li><a href="#">Mes</a></li>
            <li class="divider"></li>
            <li><a href="#">Trimestre</a></li>
            <li><a href="#">Semestre</a></li>
            <li><a href="#">Año</a></li>
          </ul>
        </div>        
        <span class="small">Desde</span>
          <div class="btn-group">
          <input class="datepicker small" data-date-format="mm/dd/yyyy">          
        </div>
        <span class="small">Hasta</span>
          <div class="btn-group">
          <input class="datepicker small" data-date-format="mm/dd/yyyy">          
        </div>

        <a class="btn btn-app">
          <span name="total_sales" class="badge bg-teal"><?=$orders_number[0]->numero_ordenes?></span>
          <i class="fa fa-inbox"></i> Órdenes
        </a>

        <a class="btn btn-app">
          <span name="total_sales" class="badge bg-aqua"><?=number_format($total_sales[0]->total_ventas, 2, '.', ',');?></span>
          <i class="fa fa-barcode"></i> Venta
        </a>

        <a class="btn btn-app">        
          <span name="products_sold" class="badge bg-purple"><?=$products_sold[0]->cantidad?></span>        
          <i class="fa fa-cubes"></i> Artículos
        </a>        
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Órdenes</li>
  </ol>
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