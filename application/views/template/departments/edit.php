    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$title_page?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/trigo/dashboard"><i class="fa fa-dashboard"></i> Inicio</a></li>        
        <li><a href="/trigo/departments">Departmentos</a></li>
        <li class="active">Editar Departamento</li>
      </ol>
    </section>
    <section class="content">
        <section class="row">
            <section class="col-md-12">
                <section class="box box-default">
                    <section class="box-header with-border">
                        <h3 class="box-title">Editar Departamento</h3>
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
                                              <h2 class="page-header">Información del Departamento</h2>
                                         </section>
                                    </section>
                                    <section class="row">
                                        <section class="col-md-6">
                                            <section class="form-group hide">
                                                <input type="hidden" name="id" value="<?=$data->id?>"/>                                                
                                            </section>
                                            <section class="form-group">
                                                <label for="">Nombre</label>
                                                <input type="text" name="name" class="form-control" placeholder="Nombre del Departamento" value="<?=$data->name?>" required/>
                                            </section>
                                            <section class="form-group">
                                                <label for="">Descripción</label>
                                                <input type="text" name="description" class="form-control" placeholder="Descripción" value="<?=$data->description?>" required/>
                                            </section>
                                            <section class="form-group">
                                                <label for="">Status</label>
                                                <select name="status" class="form-control">
                                                <option value="A"<?=$data->status == 'A' ? ' selected="selected"' : '';?>>Activo</option>
                                                <option value="I"<?=$data->status == 'I' ? ' selected="selected"' : '';?>>Inactivo</option>                                                    
                                                </select>
                                            </section>                                                            
                                        </section>                                        
                                    </section>                                                                       
                                    <section class="row">
                                        <section class="col-md-offset-10 col-md-2">
                                            <section class="form-group">
                                                <button type="submit" class="btn btn-primary">Actualizar Departamento</button>
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
