    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$title_page?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Empleados</a></li>        
        <li class="active">Editar</li>
      </ol>
    </section>
    <section class="content">
        <section class="row">
            <section class="col-md-12">
                <section class="box box-default">
                    <section class="box-header with-border">
                        <h3 class="box-title">Editar Empleado</h3>
                    </section>
                    <!-- /.box-header -->
                    <section class="box-body">
                        <section class="row">
                            <section class="col-md-12">
                                <?php if (!is_null($this->session->flashdata('error'))):?>
                                <section class="alert alert-danger">
                                    <p>No ha realizados cambios.</p>
                                </section>
                                <?php endif; ?>
                            </section>
                        </section>
                        <section class="row">
                            <form action="confirm" method="post" enctype="multipart/form-data">
                                <section class="col-md-12">
                                    <section class="row">
                                         <section class="col-md-12">
                                              <h2 class="page-header">Información del empleado</h2>
                                         </section>
                                    </section>
                                    <section class="row">
                                        <section class="col-md-6">
					    <section class="form-group hide">
                                                <input type="hidden" name="id" value="<?=$data->id?>"/>
                                                <input type="hidden" name="address_id" value="<?=$data->id?>"/>
                                            </section>
                                            <section class="form-group">
                                                <label for="">Nombre</label>
                                                <input type="text" name="employee_name" class="form-control" placeholder="Nombre" value="<?=$data->employee_name?>" required/>
                                            </section>
                                            <section class="form-group">
                                                <label for="">Apellido</label>
                                                <input type="text" name="last_name" class="form-control" placeholder="Apellido" value="<?=$data->last_name?>" required/>
                                            </section>
                                            <section class="form-group">
                                                <label for="">Email</label>
                                                <input type="text" name="email" class="form-control" placeholder="Email" value="<?=$data->email?>" required/>
                                            </section>
                                             <section class="form-group">
                                                <label for="">Telefono Fijo</label>
                                                <input type="text" name="telephone" class="form-control" placeholder="Telefono Fijo" value="<?=$data->telephone?>"/>
                                            </section>
					    <section class="form-group">
                                                <label for="">Status</label>
                                                <select name="status" class="form-control">
                                                    <option value="0">Activo</option>
                                                    <option value="1">Inactivo</option>
                                                </select>
                                            </section>
                                        </section>
                                        <section class="col-md-6">                                           
                                            <section class="form-group">
                                                <label for="">Telefono Movil</label>
                                                <input type="text" name="cellphone" class="form-control" placeholder="Telefono Movil" value="<?=$data->cellphone?>" required/>
                                            </section>
                                            <section class="form-group">
                                                <label for="">Departamento</label>
                                                <select name="department" class="form-control">
                                                    <option value="0">Derpartamento 1</option>
                                                    <option value="1">Derpartamento 1</option>
                                                </select>
                                            </section>
                                            <section class="form-group">
                                                <label for="">Posición</label>
                                                <select name="position" class="form-control">
                                                    <option value="0">Posición 1</option>
                                                    <option value="1">Posición 2</option>
                                                </select>
                                            </section>					   
                                            <section class="form-group">
                                                <label>Foto del Empleado</label>
                                                <input type="file" name="image_url" class="form-control" value="<?=$data->image_url?>"/>
                                            </section>
                                        </section>
                                    </section>
                                    <section class="row">
                                         <section class="col-md-12">
                                              <h2 class="page-header">Otras Informaciones</h2>
                                         </section>
                                    </section>
                                    <section class="row">
                                        <section class="col-md-8">
                                            <section class="form-group">
                                                <label for="">Direccion #1</label>
                                                <input type="text" name="address_1" class="form-control" value="<?=$data->address_line_1?>" placeholder="Direccion #1" required/>
                                            </section>
                                            <section class="form-group">
                                                <label for="">Direccion #2</label>
                                                <input type="text" name="address_2" class="form-control" value="<?=$data->address_line_2?>" placeholder="Direccion #2"/>
                                            </section>
                                            <section class="form-group">
                                                <label for="">Estado</label>
                                                <input type="text" name="state" class="form-control" value="<?=$data->state?>" placeholder="Estado donde reside" />
                                            </section>
                                        </section>
                                        <section class="col-md-4">
                                            <section class="form-group">
                                                <label for="">Pais</label>
                                                <input type="text" name="country" class="form-control" placeholder="Pais donde reside" value="<?=$data->country?>"/>
                                            </section>
                                            <section class="form-group">
                                                <label for="">Numero de Edificio</label>
                                                <input type="text" name="number" class="form-control" placeholder="Numero del edificio o casa" value="<?=$data->number?>"/>
                                            </section>
                                            <section class="form-group">
                                                <label for="">Zip Code</label>
                                                <input type="text" name="zip_code" class="form-control" placeholder="Zip Code" value="<?=$data->zip_code?>"/>
                                            </section>
                                        </section>
                                    </section>                                                                       
                                    <section class="row">
                                        <section class="col-md-offset-10 col-md-2">
                                            <section class="form-group">
                                                <button type="submit" class="btn btn-primary">Actualizar Empleado</button>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                            </form>
                        </section>
                    </section>
                    <!-- /.box-body -->
                </section>
                <!-- /.box -->
            </section>
        </section>
    </section>
