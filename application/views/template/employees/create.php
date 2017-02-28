    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$title_page?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Employees</a></li>        
        <li class="active">Create</li>
      </ol>
    </section>
    <section class="content">
        <section class="row">
            <section class="col-md-12">
                <section class="box box-default">
                    <section class="box-header with-border">
                        <h3 class="box-title">Agregar nuevo empleado</h3>
                    </section>
                    <!-- /.box-header -->
                    <section class="box-body">
                        <section class="row">
                            <section class="col-md-12">
                                <?php if (!is_null($this->session->flashdata('error'))):?>
                                <section class="alert alert-danger">
                                    <p>El empleado ya existe.</p>
                                </section>
                                <?php endif; ?>
                            </section>
                        </section>
                        <section class="row">
                            <form action="/trigo/employee/create/confirm" method="post" enctype="multipart/form-data">
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
                                                <input type="text" name="telephone" class="form-control" placeholder="Telefono Fijo"/>
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
                                                <input type="text" name="cellphone" class="form-control" placeholder="Telefono Movil" required/>
                                            </section>
                                            <section class="form-group">
                                                <label for="">Departamento</label>
                                                <select name="department" class="form-control">
                                                <option value=""></option>
                                                <?php foreach($department as $key => $value):?>
                                                <option value="<?=$value->id?>"><?=$value->name?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            </section>
                                            <section class="form-group">
                                            <label for="">Puesto</label>
                                            <select name="position" class="form-control">
                                                <option value=""></option>
                                                <?php foreach($position as $key => $value):?>
                                                <option value="<?=$value->id?>"><?=$value->name?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            </section>					   
                                            <section class="form-group">
                                                <label>Foto del Empleado</label>
                                                <input type="file" name="image_url" class="form-control" />
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
                                                <input type="text" name="address_1" class="form-control" placeholder="Direccion #1" required/>
                                            </section>
                                            <section class="form-group">
                                                <label for="">Direccion #2</label>
                                                <input type="text" name="address_2" class="form-control" placeholder="Direccion #2"/>
                                            </section>
                                            <section class="form-group">
                                                <label for="">Estado</label>
                                                <input type="text" name="state" class="form-control" placeholder="Estado donde recide"/>
                                            </section>
                                        </section>
                                        <section class="col-md-4">
                                            <section class="form-group">
                                                <label for="">Pais</label>
                                                <input type="text" name="country" class="form-control" placeholder="Pais donde recide" />
                                            </section>
                                            <section class="form-group">
                                                <label for="">Numero de Edificio</label>
                                                <input type="text" name="number" class="form-control" placeholder="Numero del edificio o casa"/>
                                            </section>
                                            <section class="form-group">
                                                <label for="">Zip Code</label>
                                                <input type="text" name="zip_code" class="form-control" placeholder="Zip Code"/>
                                            </section>
                                        </section>
                                    </section>                                   
                                    <section class="row">
                                        <section class="col-md-offset-10 col-md-2">
                                            <section class="form-group">
                                                <button type="submit" class="btn btn-primary">Añadir Empleado</button>
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
