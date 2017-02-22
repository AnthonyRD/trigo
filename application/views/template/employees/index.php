    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$title_page?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Empleados</li>
      </ol>
    </section>
    <section class="categories">
      <section class="categories-header">
        <ul>
          <li><a href="/employee/create"><i class="fa fa-plus"></i>Agregar Empleado</a></li>
          <li><a href="#" id="edit_employee"><i class="fa fa-edit"></i> Editar</a></li>
          <li><a href="#" id="delete_employee"><i class="fa fa-trash"></i> Eliminar</a></li>
          <li><a href="#" id="view"><i class="fa fa-info"></i> Detalles</a></li> 
        </ul>
      </section>
      <section class="categories-content">
        <section class="content">
          <section class="row">
            <section class="col-md-12">
              <?php if (!is_null($this->session->flashdata('employee_success')) && $this->session->flashdata('employee_success') === TRUE):?>
                <section class="alert alert-success">
                  <p>Empleado grabado con éxito!</p>
                </section>
              <?php elseif(!is_null($this->session->flashdata('employee_success')) && $this->session->flashdata('employee_success') === FALSE):?>
                <section class="alert alert-danger">
                  <p>Algo salió mal. Favor revisar los datos.</p>
                </section>
              <?php endif;?>
            </section>
          </section>
          <section class="row">
          <section class="col-md-12">
            <section class="box box-default">
                    <section class="box-header with-border">
                        <h3 class="box-title">Lista de Empleados</h3>
                    </section>
                    <!-- /.box-header -->
                    <section class="box-body">
                      <table class="table table-bordered table-hover" id="datatables">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Telefono</th>
                            <th>Celular</th>
                            <th>Email</th>
                            <th>Departamento</th>
                            <th>Posicion</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php if (isset($data) && !is_null($data)): foreach($data as $key => $value): ?>
                          <tr>
                            <td>
                              <section class="radio icheck">
                                <label><input type="radio" name="iCheck" value="<?=$value->employee_id?>"></label>
                              </section>
                            </td>
                            <td><?=$value->employee_name?></td>
                            <td><?=$value->last_name?></td>                            
                            <td><?=$value->telephone?></td>
                            <td><?=$value->cellphone?></td>
                            <td><?=$value->email?></td>
                            <td><?=$value->department_name?></td>
                            <td><?=$value->position_name?></td>
                            <td><?=$value->employee_status == 'A' ? "Activo" : 'Inactivo'?></td>
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
