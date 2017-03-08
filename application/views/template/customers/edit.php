    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$title_page?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/trigo/dashboard"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="/trigo/customers">Clientes</a></li>        
        <li class="active">Editar</li>
      </ol>
    </section>
    <section class="content">
        <section class="row">
            <section class="col-md-12">
                <section class="box box-default">
                    <section class="box-header with-border">
                        <h3 class="box-title">Editar Cliente</h3>
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
                            <form action="confirm" method="POST">
                                <section class="col-md-12">
                                    <section class="row">
                                         <section class="col-md-12">
                                              <h2 class="page-header">Información del cliente</h2>
                                         </section>
                                    </section>
                                    <section class="row">
                                <section class="col-md-6">
                                    <section class="form-group hide">
                                        <input type="hidden" name="id" value="<?=$data->id?>"/>
                                        <input type="hidden" name="address_id" value="<?=$data->address_id?>"/>
                                    </section>
                                    <section class="form-group">
                                        <label for="">Nombre</label>
                                        <input type="text" name="name" class="form-control" placeholder="Nombre" value="<?=$data->name?>" required />
                                    </section>
                                    <section class="form-group">
                                        <label for="">Apellido</label>
                                        <input type="text" name="last_name" class="form-control" placeholder="Apellido" value="<?=$data->last_name?>"/>
                                    </section>
                                    <section class="form-group">
                                        <label for="">Teléfono Fijo</label>
                                        <input type="text" name="telephone" class="form-control" placeholder="Numero de telefono fijo" value="<?=$data->telephone?>"/>
                                    </section>
                                    <section class="form-group">
                                        <label for="">Teléfono Móvil</label>
                                        <input type="text" name="cellphone" class="form-control" placeholder="Numero de telefono movil" value="<?=$data->cellphone?>"/>
                                    </section>
                                </section>
                                <section class="col-md-6">
                                    <section class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Correo Electronico" value="<?=$data->email?>" required/>
                                    </section>
                                    <section class="form-group">
                                                <label for="">Origen</label>
                                                <select name="origin" class="form-control">
                                                <option value="Nacional"<?=$data->origin == 'Nacional' ? ' selected="selected"' : '';?>>Nacional</option>
                                                <option value="Extranjero"<?=$data->origin == 'Extranjero' ? ' selected="selected"' : '';?>>Extranjero</option>                                                    
                                                </select>
                                    </section>                                    
                                    <section class="form-group">
                                        <label>Fecha de nacimiento</label>
                                        <input type="date" name="birthdate" class="form-control" placeholder="Y-m-d" value="<?=$data->birthdate?>"/>
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
                                        <input type="text" name="address_1" class="form-control" placeholder="Direccion #1" value="<?=$data->address_line_1?>" required/>
                                    </section>
                                    <section class="form-group">
                                        <label for="">Dirección #2</label>
                                        <input type="text" name="address_2" class="form-control" placeholder="Direccion #2" value="<?=$data->address_line_2?>"/>
                                    </section>
                                    <section class="form-group">
                                        <label for="">Estado</label>
                                        <input type="text" name="state" class="form-control" placeholder="Estado donde recide" value="<?=$data->state?>"/>
                                    </section>
                                </section>
                                <section class="col-md-4">
                                    <section class="form-group">
                                        <label for="">País</label>
                                        <input type="text" name="country" class="form-control" placeholder="Pais donde recide" value="<?=$data->country?>"/>
                                    </section>
                                    <section class="form-group">
                                        <label for="">Número de Edificio</label>
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
                                                <button type="submit" class="btn btn-primary">Actualizar Cliente</button>
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
