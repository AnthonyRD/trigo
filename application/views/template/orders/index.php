    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$title_page?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/trigo/dashboard"><i class="fa fa-dashboard"></i> Inicio</a></li>                
        <li class="active">Productos</li>
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
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Imagen</th>
                            <th>Punto de Reorden</th>
                            <th>Fcha de ingreso</th>
                            <th>Última entrada</th>
                            <th>Suplidor</th>
                            <th>Categoría</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php if (isset($data) && !(is_null($data))): foreach($data as $key => $value): ?>
                          <tr>
                            <td>
                              <section class="radio icheck">
                                <label><input type="radio" name="iCheck" value="<?=$value->id?>"></label>
                                </section>
                              </section>
                            </td>
                            <td><?=$value->name?></td>
                            <td><?=$value->description?></td>
                            <td><img src="<?=base_url()?>uploads/products/<?=$value->image_url?>" width="45"/></td>
                            <td><?=$value->reorder_level?></td>
                            <td><?=$value->entry_date?></td>
                            <td><?=$value->last_entry?></td>
                            <td><?=$value->suppier_name?></td>
                            <td><?=$value->name_category?></td>
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