    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$title_page?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/trigo/dashboard"><i class="fa fa-dashboard"></i> Inicio</a></li>        
        <li><a href="/trigo/suppliers">Suplidores</a></li>        
        <li class="active">Editar</li>
      </ol>
    </section>
    <section class="content">
        <section class="row">
            <section class="col-md-12">
                <section class="box box-default">
                    <section class="box-header with-border">
                        <h3 class="box-title">Crear nueva categoría</h3>
                    </section>
                    <!-- /.box-header -->
                    <section class="box-body">
                        <section class="row">
                            <section class="col-md-12">
                                <?php if (!is_null($this->session->flashdata('error')) && $this->session->flashdata('error') === TRUE): ?>
                                <section class="alert alert-danger">
                                    <p>No haz hecho ningún cambio.</p>
                                </section>
                                <?php endif;?>
                            </section>
                        </section>
                        <section class="row">
                            <form action="confirm" method="post">
                                <section class="col-md-12">
                                    <section class="row">
                                         <section class="col-md-12">
                                              <h2 class="page-header">Información del suplidor</h2>
                                         </section>
                                    </section>
                                    <section class="row">
                                        <section class="col-md-6">
                                            <section class="form-group hide">
                                                <input type="hidden" name="id" value="<?=$data->id?>"/>
                                                <input type="hidden" name="address_id" value="<?=$data->aid?>"/>
                                            </section>
                                            <section class="form-group">
                                                <label for="">Nombre</label>
                                                <input type="text" name="name" class="form-control" placeholder="Nombre del suplidor" value="<?=$data->name?>" required/>
                                            </section>
                                            <section class="form-group">
                                                <label for="">Email</label>
                                                <input type="email" name="email" class="form-control" placeholder="Correo Electronico" value="<?=$data->email?>" required/>
                                            </section>
                                            <section class="form-group">
                                                <label for="">Nombre de contacto</label>
                                                <input type="text" name="contact_name" class="form-control" placeholder="Nombre del contacto" value="<?=$data->contact_name?>" required/>
                                            </section>
                                        </section>
                                        <section class="col-md-6">
                                            <section class="form-group">
                                                <label for="">RNC</label>
                                                <input type="text" name="rnc" class="form-control" value="<?=$data->RNC?>" placeholder="RNC"/>
                                            </section>
                                            <section class="form-group">
                                                <label for="">Teléfono</label>
                                                <input type="text" name="telephone" class="form-control" value="<?=$data->telephone?>" placeholder="Numero de telefono" required/>
                                            </section>
                                            <section class="form-group">
                                                <label>Telefono Movil</label>
                                                <input type="text" name="cellphone" class="form-control" value="<?=$data->cellphone?>" placeholder="Numero del Movil"/>
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
                                                <input type="text" name="address_1" class="form-control" value="<?=$data->address_1?>" placeholder="Direccion #1" required/>
                                            </section>
                                            <section class="form-group">
                                                <label for="">Dirección #2</label>
                                                <input type="text" name="address_2" class="form-control" value="<?=$data->address_2?>" placeholder="Direccion #2"/>
                                            </section>
                                            <section class="form-group">
                                                <label for="">Estado</label>
                                                <input type="text" name="state" class="form-control" value="<?=$data->state?>" placeholder="Estado donde recide"/>
                                            </section>
                                        </section>
                                        <section class="col-md-4">
                                            <section class="form-group">
                                                <label for="">País</label>
                                                <input type="text" name="country" class="form-control" value="<?=$data->country?>" placeholder="Pais donde recide" />
                                            </section>
                                            <section class="form-group">
                                                <label for="">Número de Edificio</label>
                                                <input type="text" name="number" class="form-control" value="<?=$data->number?>" placeholder="Numero del edificio o casa"/>
                                            </section>
                                            <section class="form-group">
                                                <label for="">Zip Code</label>
                                                <input type="text" name="zip_code" class="form-control" value="<?=$data->zip_code?>" placeholder="Zip Code"/>
                                            </section>
                                        </section>
                                    </section>
                                    <section class="row">
                                         <section class="col-md-12">
                                              <h2 class="page-header">Observaciones</h2>
                                         </section>
                                    </section>
                                    <section class="row">
                                        <section class="col-md-12">
                                            <section class="form-group">
                                                <textarea name="details" class="form-control" placeholder="Observaciones" required><?=$data->Details?></textarea>
                                            </section>
                                        </section>
                                    </section>
                                    <section class="row">
                                        <section class="col-md-offset-10 col-md-2">
                                            <section class="form-group">
                                                <button type="submit" class="btn btn-primary">Actualizar suplidor</button>
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
