    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$title_page?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/trigo/dashboard"><i class="fa fa-dashboard"></i> Inicio</a></li>                
        <li class="active">Órdenes</li>
      </ol>
    </section>
    <section class="categories">      
      <section class="categories-content">
        <section class="content">
          <section class="row">            
          </section>
          <section class="row">
          <section class="col-md-12">
            <section class="box box-default">
                    <section class="box-header with-border">
                        <h3 class="box-title">Lista de Órdenes</h3>
                    </section>
                    <!-- /.box-header -->
                    <section class="box-body">
                      <table class="table table-bordered table-hover" id="datatables">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Orden</th>
                            <th>Fecha</th>
                            <th>Tipo de Servicio</th>
                            <th>Modo de Pago</th>
                            <th>Cliente</th>
                            <th>Monto</th>                            
                            <th>Tienda</th>
                            <th>Atendió</th>
                            <th>Estado</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php if (isset($data) && !(is_null($data))): foreach($data as $key => $value): ?>
                          <tr>
                            <td>
                              <section class="radio icheck">
                                <label><input type="radio" name="iCheck" value="<?=$value->orden?>"></label>
                                </section>
                              </section>
                            </td>
                            <td><?=$value->orden?></td>
                            <td><?=$value->fecha?></td>
                            <td><?=$value->tipo_orden?></td>
                            <td><?=$value->tipo_pago?></td>
                            <td><?=$value->nombre_cliente =='Default' ? 'N/A' : $value->nombre_cliente . ' ' . $value->apellido_cliente ?></td>
                            <td><?=number_format($value->itbis + $value->subtotal, 2, '.', ','); ?></td>
                            <td><?=$value->tienda?></td>
                            <td><?=$value->username?></td>
                            <td><?=$value->status?></td>
                          </tr>
                          <?php endforeach;endif;?>
                        </tbody>
                      </table>
                    </section>
                    <!-- /.box-body -->
                </section>
                <!-- /.box -->
          </section>
        </section>
        </section>
      </section>
    </section>


  