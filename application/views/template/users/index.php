    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$title_page?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/trigo/dashboard"><i class="fa fa-dashboard"></i> Inicio</a></li>                
        <li class="active">Usuarios</li>
      </ol>
    </section>
    <section class="categories">
      <section class="categories-header">
        <ul>
          <li><a href="/trigo/user/create"><i class="fa fa-plus"></i> Crear Usuario</a></li>
          <li><a href="#" id="edit_user"><i class="fa fa-edit"></i> Editar</a></li>
          <li><a href="#" id="delete_user"><i class="fa fa-trash"></i> Eliminar</a></li>
          <!--<li><a href="#" id="view"><i class="fa fa-info"></i> View</a></li> -->
        </ul>
      </section>
      <section class="categories-content">
        <section class="content">
          <section class="row">
            <section class="col-md-12">
              <?php if (!is_null($this->session->flashdata('user_success')) && $this->session->flashdata('user_success') === TRUE):?>
                <section class="alert alert-success">
                  <p>¡Operación realizada con éxito!</p>
                </section>
              <?php elseif(!is_null($this->session->flashdata('user_success')) && $this->session->flashdata('user_success') === FALSE):?>
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
                        <h3 class="box-title">Lista de Usuarios</h3>
                    </section>
                    <!-- /.box-header -->
                    <section class="box-body">
                      <table class="table table-bordered table-hover" id="datatables">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Usuario</th>
                            <th>Password</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Rol</th>
                            <th>Status</th>                           
                          </tr>
                        </thead>
                        <tbody>
                          <?php if (isset($data) && !is_null($data)): foreach($data as $key => $value): ?>
                          <tr>
                            <td>
                              <section class="radio icheck">
                                <label><input type="radio" name="iCheck" value="<?=$value->id?>"></label>
                              </section>
                            </td>
                            <td><?=$value->user_name?></td>
                            <td><?=$value->password?></td>
                            <td><?=$value->name?></td>
                            <td><?=$value->last_name?></td>
                            <td><?=$value->role?></td>
                            <td><?=$value->status == 'A' ? "Activo" : 'Inactivo'?></td>                                                     
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