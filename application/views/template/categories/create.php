    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$title_page?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Productos</a></li>
        <li><a href="#">Categorías</a></li>
        <li class="active">Crear Categoría</li>
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
                                <?php echo validation_errors(); ?>
                            </section>
                        </section>
                        <section class="row">
                            <section class="col-md-6">
                                <form action="create/confirm" method="post">
                                    <section class="form-group">
                                        <label for="">Nombre</label>
                                        <input type="text" name="name" class="form-control" placeholder="Nombre categoría"/>
                                    </section>
                                    <section class="form-group">
                                        <label for="">Descripción</label>
                                        <textarea name="descripcion" class="form-control" placeholder="Una breve descripción de esta categoria"></textarea>
                                    </section>
                                    <section class="form-group">
                                        <button type="submit" class="btn btn-primary">Añadir categoríaa</button>
                                    </section>
                                </form>
                            </section>
                            <section class="col-md-6">
                                <div class="alert alert-info alert-dismissible">
                                    <h4><i class="icon fa fa-info"></i> Información!</h4>
                                    Esta categoría será utilizada para clasificar sus productos de venta a los clientes.
                                  </div>
                            </section>
                        </section>
                    </section>
                    <!-- /.box-body -->
                </section>
                <!-- /.box -->
            </section>
        </section>
    </section>