    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$title_page?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Usuarios</a></li>        
        <li class="active">Editar Usuario</li>
      </ol>
    </section>
    <section class="content">
        <section class="row">
            <section class="col-md-12">
                <section class="box box-default">
                    <section class="box-header with-border">
                        <h3 class="box-title">Editar Usuario</h3>
                    </section>
                    <!-- /.box-header -->
                    <section class="box-body">
                        <form action="confirm" method="post" enctype="multipart/form-data">
                            <section class="row">
                                <section class="col-md-6">
                                    <section class="form-group">
                                        <label>User Name</label>
                                        <input type="text" name="user_name" class="form-control" placeholder="Nombre de usuario" value="<?=$data->user_name?>" required/>
                                    </section>
                                    <section class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password" value="<?=$data->password?>" required/>
                                    </section>                                   
                                     <section class="form-group">
                                        <label for="">Status</label>
                                        <select name="status" class="form-control">
                                        <option value="A"<?=$data->status == 'A' ? ' selected="selected"' : '';?>>Activo</option>
                                        <option value="I"<?=$data->status == 'I' ? ' selected="selected"' : '';?>>Inactivo</option>                                                    
                                        </select>
                                    </section>                                                                          
                                    <section class="form-group">
                                        <label>Empleado</label>
                                        <select name="employee" class="form-control">
                                            <?php foreach($employee as $key => $value):?>
                                            <option value="<?=$value->employee_id?>" <?=$data->employee_id == $value->employee_id ? ' selected="selected"' : '';?>><?=$value->employee_name?> <?=$value->last_name?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </section>
                                    <section class="form-group">
                                        <label>Rol</label>
                                        <select name="role" class="form-control">
                                            <?php foreach($role as $key => $value):?>
                                            <option value="<?=$value->id?>"  <?=$data->role_id == $value->id ? ' selected="selected"' : '';?>><?=$value->name?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </section>                                    
                                </section>                                   
                            </section>                          
                            <section class="row">
                                <section class="col-md-2 col-md-offset-10">
                                    <button class="btn btn-default" type="submit">Editar Usuario</button>
                                </section>
                            </section>
                        </form>                          
                    </section>
                </section>
            </section>
        </section>
    </section>