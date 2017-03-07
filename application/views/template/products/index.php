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
      <section class="categories-header">
        <ul>
          <li><a href="/trigo/product/create"><i class="fa fa-plus"></i> Agregar Producto</a></li>
          <li><a href="#" id="edit_product"><i class="fa fa-edit"></i> Editar</a></li>
          <li><a href="#" id="delete_product"><i class="fa fa-trash"></i> Eliminar</a></li>
          <!--<li><a href="#" id="view"><i class="fa fa-info"></i> View</a></li> -->
        </ul>
      </section>
      <section class="categories-content">
        <section class="content">
          <section class="row">
            <section class="col-md-12">
              <?php if (!is_null($this->session->flashdata('product_success')) && $this->session->flashdata('product_success') === TRUE):?>
                <section class="alert alert-success">
                  <p>¡Operación realizada con éxito!</p>
                </section>
              <?php elseif(!is_null($this->session->flashdata('product_success')) && $this->session->flashdata('product_success') === FALSE):?>
                <section class="alert alert-danger">
                  <p>¡Algo salió mal! Revisar Datos.</p>
                </section>
              <?php endif;?>
            </section>
          </section>
          <section class="row">
          <section class="col-md-12">
            <section class="box box-default">
                    <section class="box-header with-border">
                        <h3 class="box-title">Lista de productos</h3>
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