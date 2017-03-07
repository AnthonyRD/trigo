    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$title_page?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/trigo/dashboard"><i class="fa fa-dashboard"></i> Inicio</a></li>        
        <li><a href="/trigo/locations">Localidades</a></li>
        <li class="active">Agregar Localidad</li>
      </ol>
    </section>
    <section class="content">
        <section class="row">
            <section class="col-md-12">
                <section class="box box-default">
                    <section class="box-header with-border">
                        <h3 class="box-title">Agregar Localidad</h3>
                    </section>
                    <!-- /.box-header -->
                    <section class="box-body">
                        <section class="row">
                            <section class="col-md-12">
                                <?php if (!is_null($this->session->flashdata('error'))):?>
                                <section class="alert alert-danger">
                                    <p>El nombre de la Localidad ya existe.</p>
                                </section>
                                <?php endif; ?>
                            </section>
                        </section>
                        <section class="row">
                            <form action="create/confirm" method="post">
                                <section class="col-md-12">
                                    <section class="row">
                                         <section class="col-md-12">
                                              <h2 class="page-header">Información de la Localidad</h2>
                                         </section>
                                    </section>
                                    <section class="row">
                                        <section class="col-md-6">
                                            <section class="form-group">
                                                <label for="">Nombre</label>
                                                <input type="text" name="name" class="form-control" placeholder="Nombre del Localidad" required/>
                                            </section>
                                            <section class="form-group">
                                                <label for="">Description</label>
                                                <input type="text" name="description" class="form-control" placeholder="Descripción" required/>
                                            </section>                                                                                      
                                        </section>                                       
                                    </section>                                                                                                                                         
                                    <section class="row">
                                        <section class="col-md-offset-10 col-md-2">
                                            <section class="form-group">
                                                <button type="submit" class="btn btn-primary">Agregar Localidad</button>
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