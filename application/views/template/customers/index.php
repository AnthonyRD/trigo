    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$title_page?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Clientes</li>
      </ol>
    </section>
    <section class="categories">
      <section class="categories-header">
        <ul>
          <li><a href="/product/create"><i class="fa fa-plus"></i> Agregar cliente</a></li>
          <li><a href="#" id="edit_product"><i class="fa fa-edit"></i> Editar</a></li>
          <li><a href="#" id="delete_product"><i class="fa fa-trash"></i> Eliminar</a></li>
          <!--<li><a href="#" id="view"><i class="fa fa-info"></i> View</a></li> -->
        </ul>
      </section>
      <section class="categories-content">
        <section class="content">
          <section class="row">
            <section class="col-md-12">
              <?php if (!is_null($this->session->flashdata('customer_success')) && $this->session->flashdata('customer_success') === TRUE):?>
                <section class="alert alert-success">
                  <p>Todo a salido bien!</p>
                </section>
              <?php elseif(!is_null($this->session->flashdata('customer_success')) && $this->session->flashdata('customer_success') === FALSE):?>
                <section class="alert alert-danger">
                  <p>Algo salio mal!</p>
                </section>
              <?php endif;?>
            </section>
          </section>
          <section class="row">
          <section class="col-md-12">
            <section class="box box-default">
                    <section class="box-header with-border">
                        <h3 class="box-title">Lista de clientes</h3>
                    </section>
                    <!-- /.box-header -->
                    <section class="box-body">
                      <table class="table table-bordered table-hover" id="datatables">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Teléfono</th>
                            <th>Móvil</th>
                            <th>Email</th>
                            <th>Origen</th>
                            <th>Fecha de nacimiento</th>
                            <th>Dirección</th>
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
                            <td><?=$value->last_name?></td>
                            <td><?=$value->telephone?></td>
                            <td><?=$value->cellphone?></td>
                            <td><?=$value->email?></td>
                            <td><?=$value->origin?></td>
                            <td><?=$value->birthdate?></td>
                            <td><?=$value->address_line_1?></td>
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