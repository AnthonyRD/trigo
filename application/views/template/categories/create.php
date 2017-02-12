    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$title_page?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Categories</a></li>
        <li class="active">New Create</li>
      </ol>
    </section>
    <section class="content">
        <section class="row">
            <section class="col-md-12">
                <section class="box box-default">
                    <section class="box-header with-border">
                        <h3 class="box-title">Crear nueva categoria</h3>
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
                                        <input type="text" name="name" class="form-control" placeholder="Nombre categoria"/>
                                    </section>
                                    <section class="form-group">
                                        <label for="">Descripcion</label>
                                        <textarea name="descripcion" class="form-control" placeholder="Una breve descripcion de esta categoria"></textarea>
                                    </section>
                                    <section class="form-group">
                                        <button type="submit" class="btn btn-primary">Añadir categoria</button>
                                    </section>
                                </form>
                            </section>
                            <section class="col-md-6">
                                <div class="alert alert-info alert-dismissible">
                                    <h4><i class="icon fa fa-info"></i> Informacion!</h4>
                                    Esta categoria sera usada para clasificar sus producto de venta a los clientes respectivos.
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