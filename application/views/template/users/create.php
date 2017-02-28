    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$title_page?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>        
        <li><a href="#">Departmentos</a></li>
        <li class="active">Crear Usuario</li>
      </ol>
    </section>
    <section class="content">
        <section class="row">
            <section class="col-md-12">
                <section class="box box-default">
                    <section class="box-header with-border">
                        <h3 class="box-title">Crear nuevo Usuario</h3>
                    </section>
                    <!-- /.box-header -->
                    <section class="box-body">
                        <section class="row">
                            <section class="col-md-12">
                                <?php if (!is_null($this->session->flashdata('error'))):?>
                                <section class="alert alert-danger">
                                    <p>El nombre del Usuario ya existe.</p>
                                </section>
                                <?php endif; ?>
                            </section>
                        </section>
                        <section class="row">
                            <form action="create/confirm" method="post">
                                <section class="col-md-12">
                                    <section class="row">
                                         <section class="col-md-12">
                                              <h2 class="page-header">Información del Usuario</h2>
                                         </section>
                                    </section>
                                    <section class="row">
                                        <section class="col-md-6">
                                            <section class="form-group">
                                                <label for="">User Name</label>
                                                <input type="text" name="user_name" class="form-control" placeholder="Nombre del usuario" required/>
                                            </section>
                                             <section class="form-group">
                                                <label for="">Password</label>
                                                <input type="text" name="password" class="form-control" placeholder="Nombre del usuario" required/>
                                            </section>                                          
                                            <section class="form-group">
                                                <label>Empleado</label>
                                                <select name="employee" class="form-control">
                                                    <option value=""></option>
                                                    <?php foreach($employee as $key => $value):?>
                                                    <option value="<?=$value->employee_id?>"><?=$value->employee_name?> <?=$value->last_name?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </section>
                                            <section class="form-group">
                                            <label>Rol</label>                                            
                                            <select name="role" class="form-control">
                                                <option value=""></option>
                                                <?php foreach($role as $key => $value):?>
                                                <option value="<?=$value->id?>"><?=$value->name?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </section>   
                                            <section class="form-group">
                                                <label for="">Status</label>
                                                <select name="status" class="form-control">
                                                    <option value="A">Activo</option>
                                                    <option value="I">Inactivo</option>
                                                </select>
                                            </section>                                           
                                        </section>                                       
                                    </section>                                                                                                                                         
                                    <section class="row">
                                        <section class="col-md-offset-10 col-md-2">
                                            <section class="form-group">
                                                <button type="submit" class="btn btn-primary">Añadir Usuario</button>
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