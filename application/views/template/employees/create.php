    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$title_page?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/trigo/dashboard"><i class="fa fa-dashboard"></i> Inicio</a></li>        
        <li><a href="/trigo/employees">Empleados</a></li>        
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
                                    <p>No ha realizado cambios.</p>
                                </section>
                                <?php endif; ?>
                            </section>
                        </section>
                        <section class="row">
                            <form action="confirm" method="POST" enctype="multipart/form-data">
                                <section class="col-md-12">
                                    <section class="row">
                                         <section class="col-md-12">
                                              <h2 class="page-header">Información del empleado</h2>
                                         </section>
                                    </section>
                                    <section class="row">
                                        <section class="col-md-6">					                
                                            <section class="form-group">
                                                <label for="">Nombre</label>
                                                <input type="text" name="employee_name" class="form-control" placeholder="Nombre" required/>
                                            </section>
                                            <section class="form-group">
                                                <label for="">Apellido</label>
                                                <input type="text" name="last_name" class="form-control" placeholder="Apellido" required/>
                                            </section>
                                            <section class="form-group">
                                                <label for="">Email</label>
                                                <input type="text" name="email" class="form-control" placeholder="Email" required/>
                                            </section>
                                             <section class="form-group">
                                                <label for="">Telefono Fijo</label>
                                                <input type="text" name="telephone" class="form-control" placeholder="Telefono Fijo" />
                                            </section>
					                        <section class="form-group">
                                                <label for="">Status</label>
                                                <select name="status" class="form-control">
                                                <option value="A">Activo</option>
                                                <option value="I">Inactivo</option>                                                    
                                                </select>
                                            </section> 
                                        </section>
                                        <section class="col-md-6">                                           
                                            <section class="form-group">
                                                <label for="">Telefono Móvil</label>
                                                <input type="text" name="cellphone" class="form-control" placeholder="Telefono Móvil" required/>
                                            </section>
                                            <section class="form-group">
                                            <label for="">Departamento</label>
                                            <select name="department" class="form-control">
                                                <option value=""></option>
                                                <?php foreach($department as $key => $value):?>
                                                <option value="<?=$value->id?>"  <?=$data->department_id == $value->id ? ' selected="selected"' : '';?>></option>
                                                <?php endforeach; ?>
                                            </select>   
                                            </section>
                                            <section class="form-group">
                                            <label>Posición</label>
                                            <select name="position" class="form-control">
                                                <option value=""></option>
                                                <?php foreach($position as $key => $value):?>
                                                <option value="<?=$value->id?>"  <?=$data->position_id == $value->id ? ' selected="selected"' : '';?>></option>
                                                <?php endforeach; ?>
                                            </select>                                               
                                            </section>					   
                                            <section class="form-group">
                                                <label>Foto del Empleado</label>
                                                <input type="file" name="image_url" class="form-control"/>
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
                                                <label for="">Dirección #1</label>
                                                <input type="text" name="address_1" class="form-control" placeholder="Direccion #1" required/>
                                            </section>
                                            <section class="form-group">
                                                <label for="">Dirección #2</label>
                                                <input type="text" name="address_2" class="form-control" placeholder="Direccion #2"/>
                                            </section>
                                            <section class="form-group">
                                                <label for="">Estado</label>
                                                <input type="text" name="state" class="form-control" placeholder="Estado donde reside" />
                                            </section>
                                        </section>
                                        <section class="col-md-4">
                                            <section class="form-group">
                                                <label for="">País</label>
                                                <input type="text" name="country" class="form-control" placeholder="Pais donde reside" />
                                            </section>
                                            <section class="form-group">
                                                <label for="">Número de Edificio</label>
                                                <input type="text" name="number" class="form-control" placeholder="Numero del edificio o casa" />
                                            </section>
                                            <section class="form-group">
                                                <label for="">Zip Code</label>
                                                <input type="text" name="zip_code" class="form-control" placeholder="Zip Code" />
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
