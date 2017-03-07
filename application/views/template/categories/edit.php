    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$title_page?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/trigo/dashboard"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="/trigo/products">Productos</a></li>
        <li><a href="/trigo/product/categories">Categorías</a></li>
        <li class="active">Editar Categoría</li>
      </ol>
    </section>
    <section class="content">
        <section class="row">
            <section class="col-md-12">
                <section class="box box-default">
                    <section class="box-header with-border">
                        <h3 class="box-title">Editar Categoría</h3>
                    </section>
                    <!-- /.box-header -->
                    <section class="box-body">
                        <section class="row">
                            <section class="col-md-12">
                                <?php if (!is_null($this->session->flashdata('error')) && $this->session->flashdata('error') === TRUE): ?>
                                <section class="alert alert-danger">
                                    <p>No haz realizado ningún cambio.</p>
                                </section>
                                <?php endif;?>
                            </section>
                        </section>
                        <section class="row">
                            <section class="col-md-6">
                                <form action="confirm" method="post">
                                    <section class="form-group">
                                        <input type="hidden" name="id" value="<?=$data->id?>">
                                    </section>
                                    <section class="form-group">
                                        <label for="">Nombre</label>
                                        <input type="text" name="name" class="form-control" placeholder="Nombre categoria" value="<?=$data->name?>"/>
                                    </section>
                                    <section class="form-group">
                                        <label for="">Descripción</label>
                                        <textarea name="descripcion" class="form-control" placeholder="Una breve descripcion de esta categoria"><?=$data->description?></textarea>
                                    </section>
                                    <section class="form-group">
                                        <button type="submit" class="btn btn-primary">Actualizar categoría</button>
                                    </section>
                                </form>
                            </section>
                            <section class="col-md-6">
                                <div class="alert alert-info alert-dismissible">
                                    <h4><i class="icon fa fa-info"></i> Información!</h4>
                                    Esta categoría será usada para clasificar sus productos de venta a los clientes respectivos.
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
    