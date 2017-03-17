    <style>

    .grid {  
  max-width: 1200px;
}

/* clearfix */
.grid:after {
  content: '';
  display: block;
  clear: both;
}

/* ---- grid-item ---- */

.grid-item {
  /*width: 160px;*/
  /*height: 120px;*/
  /*float: left;*/
  /*background: #D26;
  border: 2px solid #333;
  border-color: hsla(0, 0%, 0%, 0.5);
  border-radius: 5px;*/
  /*margin:1px;*/
}

.grid-item--width2 { width: 320px; }
.grid-item--width3 { width: 480px; }
.grid-item--width4 { width: 640px; }

.grid-item--height2 { height: 200px; }
.grid-item--height3 { height: 260px; }
.grid-item--height4 { height: 360px; }

.main-footer {    
    display: none;
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
          <span class="badge bg-teal"><?php $orders_number[0]?></span>
          <i class="fa fa-inbox"></i> Órdenes
        </a>

        <a class="btn btn-app">
          <span class="badge bg-aqua"><?php $total_sales[0]?></span>
          <i class="fa fa-barcode"></i> Venta
        </a>

        <a class="btn btn-app">
        <?php foreach($products_sold as $key => $value): ?> 
          <span class="badge bg-purple"><?php $value->cantidad?></span>
        <?php endforeach;?> 
          <i class="fa fa-barcode"></i> Artículos
        </a>        
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Órdenes</li>
  </ol>
</section>
<section class="content">
  <!-- Main content -->  
    <div class="grid col-md-12">
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
  </section>
  <!-- /.content -->