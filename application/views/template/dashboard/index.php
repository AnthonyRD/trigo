<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?=$title_page?>
    <small> </small>   
             
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Indicadores</li>
  </ol>
</section>
<section class="categories">
  <section class="categories-header">
    <ul>    
    </ul>
  </section>
  </section>
  <!-- Main content -->
  <section class="content">

  
      <!-- Info boxes -->                 
      <div class="row">      
          <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                  <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">CLIENTES ACTUALES</span>
                      <span class="info-box-number"><?=$customer_number[0]->customers_number?><small></small></span>
                  </div>
                  <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                  <span class="info-box-icon bg-red"><i class="fa fa-cubes"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">PRODUCTOS VENDIDOS</span>
                      <span class="info-box-number"><?=$products_sold[0]->cantidad?></span>
                  </div>
                  <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <!-- fix for small devices only -->
          <div class="clearfix visible-sm-block"></div>

          <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                  <span class="info-box-icon bg-green"><i class="fa fa-tags"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">ORDENES REALIZADAS</span>
                      <span class="info-box-number"><?=$orders_number[0]->numero_ordenes?></span>
                  </div>
                  <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                  <span class="info-box-icon bg-yellow"><i class="fa fa-send-o"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">TOTAL EN VENTAS</span>
                      <span class="info-box-number">$<?=number_format($total_sales[0]->total_ventas, 2, '.', ',');?></span>
                  </div>
                  <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
          </div>
          <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
          <div class="col-md-12">
              <div class="box">
                  <div class="box-header with-border">
                      <h3 class="box-title">Reporte Ventas</h3>

                      <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse">
                              <i class="fa fa-minus"></i>
                          </button>
                          <div class="btn-group hidden">
                              <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                                  <i class="fa fa-wrench"></i>
                              </button>
                              <ul class="dropdown-menu" role="menu">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Separated link</a></li>
                              </ul>
                          </div>
                          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                  </div>


                  
                  <!-- /.box-header -->
                  <div class="box-body">
                      <div class="row">
                          <div class="col-md-8">
                              <p class="text-center">
                                  <strong>Ventas: 1 Enero, 2016 - 30 Jul, 2016</strong>
                              </p>

                              <div class="chart">
                                  <!-- Sales Chart Canvas -->
                                  <canvas id="salesChart" style="height: 180px;"></canvas>
                              </div>
                              <!-- /.chart-responsive -->
                          </div>
                          <!-- /.col -->
                          <div class="col-md-4">
                              <p class="text-center">
                                  <strong>Metas Trimestrales</strong>
                              </p>

                              <div class="progress-group">
                                  <span class="progress-text">Primer Trimestre</span>
                                  <span class="progress-number"><b>160</b>/200</span>

                                  <div class="progress sm">
                                      <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                                  </div>
                              </div>
                              <!-- /.progress-group -->
                              <div class="progress-group">
                                  <span class="progress-text">Segundo Trimestre</span>
                                  <span class="progress-number"><b>310</b>/400</span>

                                  <div class="progress sm">
                                      <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                                  </div>
                              </div>
                              <!-- /.progress-group -->
                              <div class="progress-group">
                                  <span class="progress-text">Tercer Trimestre</span>
                                  <span class="progress-number"><b>480</b>/800</span>

                                  <div class="progress sm">
                                      <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                                  </div>
                              </div>
                              <!-- /.progress-group -->
                              <div class="progress-group">
                                  <span class="progress-text">Cuarto Trimestre</span>
                                  <span class="progress-number"><b>250</b>/500</span>

                                  <div class="progress sm">
                                      <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                                  </div>
                              </div>
                              <!-- /.progress-group -->
                          </div>
                          <!-- /.col -->
                      </div>
                      <!-- /.row -->
                  </div>
                  <!-- ./box-body -->
                  <div class="box-footer">
                      <div class="row">
                          <div class="col-sm-3 col-xs-6">
                              <div class="description-block border-right">
                                  <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                                  <h5 class="description-header">$35,210.43</h5>
                                  <span class="description-text">TOTAL DE VENTAS</span>
                              </div>
                              <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-3 col-xs-6">
                              <div class="description-block border-right">
                                  <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                                  <h5 class="description-header">$10,390.90</h5>
                                  <span class="description-text">COSTO TOTAL</span>
                              </div>
                              <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-3 col-xs-6">
                              <div class="description-block border-right">
                                  <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                                  <h5 class="description-header">$24,813.53</h5>
                                  <span class="description-text">TOTAL DE GANANCIAS</span>
                              </div>
                              <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-3 col-xs-6">
                              <div class="description-block">
                                  <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                                  <h5 class="description-header">1200</h5>
                                  <span class="description-text">CANTIDAD DE ORDENES</span>
                              </div>
                              <!-- /.description-block -->
                          </div>
                      </div>
                      <!-- /.row -->
                  </div>
                  <!-- /.box-footer -->
              </div>
              <!-- /.box -->
          </div>
          <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
              <!-- MAP & BOX PANE -->
              <div class="box box-success hidden">
                  <div class="box-header with-border">
                      <h3 class="box-title">Visitors Report</h3>

                      <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse">
                              <i class="fa fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body no-padding">
                      <div class="row">
                          <div class="col-md-9 col-sm-8">
                              <div class="pad">
                                  <!-- Map will be created here -->
                                  <div id="world-map-markers" style="height: 325px;"></div>
                              </div>
                          </div>
                          <!-- /.col -->
                          <div class="col-md-3 col-sm-4">
                              <div class="pad box-pane-right bg-green" style="min-height: 280px">
                                  <div class="description-block margin-bottom">
                                      <div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>
                                      <h5 class="description-header">8390</h5>
                                      <span class="description-text">Visits</span>
                                  </div>
                                  <!-- /.description-block -->
                                  <div class="description-block margin-bottom">
                                      <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                                      <h5 class="description-header">30%</h5>
                                      <span class="description-text">Referrals</span>
                                  </div>
                                  <!-- /.description-block -->
                                  <div class="description-block">
                                      <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                                      <h5 class="description-header">70%</h5>
                                      <span class="description-text">Organic</span>
                                  </div>
                                  <!-- /.description-block -->
                              </div>
                          </div>
                          <!-- /.col -->
                      </div>
                      <!-- /.row -->
                  </div>
                  <!-- /.box-body -->
              </div>
              <!-- /.box -->
              
              <!-- /.row -->
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                  <div class="box-header with-border">
                      <h3 class="box-title">Últimas Órdenes</h3>

                      <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse">
                              <i class="fa fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                      <div class="table-responsive">
                          <table class="table no-margin">
                              <thead>
                                  <tr>
                                      <th># Orden</th>
                                      <th>Producto</th>
                                      <th>Estado</th>
                                      <th>Popularidad</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                      <td>Desayuno</td>
                                      <td><span class="label label-success">Completada</span></td>
                                      <td>
                                          <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                      <td>Empanadas</td>
                                      <td><span class="label label-warning">Pendiente</span></td>
                                      <td>
                                          <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                      <td>Cupcakes</td>
                                      <td><span class="label label-danger">Cancelada</span></td>
                                      <td>
                                          <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                      <td>Empanadas</td>
                                      <td><span class="label label-info">En proceso</span></td>
                                      <td>
                                          <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                      <td>Empanadas</td>
                                      <td><span class="label label-warning">Pendiente</span></td>
                                      <td>
                                          <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                      <td>Cupcakes</td>
                                      <td><span class="label label-danger">Cancelada</span></td>
                                      <td>
                                          <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                      <td>Desayuno</td>
                                      <td><span class="label label-success">Completada</span></td>
                                      <td>
                                          <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                      <!-- /.table-responsive -->
                  </div>
                  <!-- /.box-body -->                  
                  <div class="box-footer clearfix">
                      <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Crear nueva Orden</a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">Ver Lista de Órdenes</a>
                  </div>
                  <!-- /.box-footer -->
              </div>
              <!-- /.box -->
          </div>
          <!-- /.col -->

          <div class="col-md-4">
              <!-- Info Boxes Style 2 -->
              <div class="info-box bg-yellow hidden">
                  <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Inventory</span>
                      <span class="info-box-number">5,200</span>

                      <div class="progress">
                          <div class="progress-bar" style="width: 50%"></div>
                      </div>
                      <span class="progress-description">
                          50% Increase in 30 Days
                      </span>
                  </div>
                  <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
              <div class="info-box bg-green hidden">
                  <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Mentions</span>
                      <span class="info-box-number">92,050</span>

                      <div class="progress">
                          <div class="progress-bar" style="width: 20%"></div>
                      </div>
                      <span class="progress-description">
                          20% Increase in 30 Days
                      </span>
                  </div>
                  <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
              <div class="info-box bg-red hidden">
                  <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Downloads</span>
                      <span class="info-box-number">114,381</span>

                      <div class="progress">
                          <div class="progress-bar" style="width: 70%"></div>
                      </div>
                      <span class="progress-description">
                          70% Increase in 30 Days
                      </span>
                  </div>
                  <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
              <div class="info-box bg-aqua hidden">
                  <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>

                  <div class="info-box-content">
                      <span class="info-box-text">Direct Messages</span>
                      <span class="info-box-number">163,921</span>

                      <div class="progress">
                          <div class="progress-bar" style="width: 40%"></div>
                      </div>
                      <span class="progress-description">
                          40% Increase in 30 Days
                      </span>
                  </div>
                  <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->

              <div class="box box-default hidden">
                  <div class="box-header with-border">
                      <h3 class="box-title">Browser Usage</h3>

                      <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse">
                              <i class="fa fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                      <div class="row">
                          <div class="col-md-8">
                              <div class="chart-responsive">
                                  <canvas id="pieChart" height="150"></canvas>
                              </div>
                              <!-- ./chart-responsive -->
                          </div>
                          <!-- /.col -->
                          <div class="col-md-4">
                              <ul class="chart-legend clearfix">
                                  <li><i class="fa fa-circle-o text-red"></i> Chrome</li>
                                  <li><i class="fa fa-circle-o text-green"></i> IE</li>
                                  <li><i class="fa fa-circle-o text-yellow"></i> FireFox</li>
                                  <li><i class="fa fa-circle-o text-aqua"></i> Safari</li>
                                  <li><i class="fa fa-circle-o text-light-blue"></i> Opera</li>
                                  <li><i class="fa fa-circle-o text-gray"></i> Navigator</li>
                              </ul>
                          </div>
                          <!-- /.col -->
                      </div>
                      <!-- /.row -->
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer no-padding">
                      <ul class="nav nav-pills nav-stacked">
                          <li>
                              <a href="#">
                                  United States of America
                                  <span class="pull-right text-red"><i class="fa fa-angle-down"></i> 12%</span>
                              </a>
                          </li>
                          <li>
                              <a href="#">India <span class="pull-right text-green"><i class="fa fa-angle-up"></i> 4%</span></a>
                          </li>
                          <li>
                              <a href="#">
                                  China
                                  <span class="pull-right text-yellow"><i class="fa fa-angle-left"></i> 0%</span>
                              </a>
                          </li>
                      </ul>
                  </div>
                  <!-- /.footer -->
              </div>
              <!-- /.box -->
              <!-- PRODUCT LIST -->
              <div class="box box-primary">
                  <div class="box-header with-border">
                      <h3 class="box-title">Productos Más Vendidos</h3> 

                      <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse">
                              <i class="fa fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                      <ul class="products-list product-list-in-box">
                      <?php $i=0; foreach($most_sold_product as $key => $value): $i++;if($i==5) break;?> 
                        <!--.item -->     
                          <li class="item">
                              <div class="product-img">
                                  <img src="<?=base_url()?>uploads/products/<?=$value->image_url?>" class="user-image" alt="User Image">                                        
                              </div>
                              <div class="product-info">
                                  <a href="javascript:void(0)" class="product-title">
                                      <?=$value->name?>
                                      <span <?= (floatval($value->price)<=25) ? 'class="label label-warning pull-right"' : 'class="label label-success pull-right"'?>>$<?=$value->price?></span>
                                  </a>
                                  <span class="product-description">
                                      <?=$value->description?>
                                  </span>
                              </div>
                          </li>
                          <!-- /.item -->      
                          
                          <?php endforeach;?>                                             
                      </ul>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer text-center">
                      <a href="javascript:void(0)" class="uppercase">Ver lista Completa</a>
                  </div>
                  <!-- /.box-footer -->
              </div>
              <!-- /.box -->
          </div>
          <!-- /.col -->
      </div>
      <!-- /.row -->
  </section>
  <!-- /.content -->