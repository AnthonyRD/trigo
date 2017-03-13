    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$title_page?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/trigo/dashboard"><i class="fa fa-dashboard"></i> Inicio</a></li>        
        <li><a href="/trigo/products">Productos</a></li>        
        <li class="active">Agregar Producto</li>
      </ol>
    </section>
    <section class="content">
        <section class="row">
            <section class="col-md-12">
                <section class="box box-default">
                    <section class="box-header with-border">
                        <h3 class="box-title">Agregar Producto</h3>
                    </section>
                    <!-- /.box-header -->
                    <section class="box-body">
                        <form action="create/confirm" method="POST" enctype="multipart/form-data">
                            <section class="row">
                                <section class="col-md-6">
                                    <section class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" name="name" class="form-control" placeholder="Nombre del producto" required/>
                                    </section>
                                    <section class="form-group">
                                        <label>Precio</label>
                                        <input type="number" name="price" class="form-control" placeholder="Precio del producto" required/>
                                    </section>
                                    <section class="form-group">
                                        <label>¿Cargar impuesto?</label>
                                        <section class="checkbox icheck">
                                            <label><input type="checkbox" name="charge_tax" checked></label>
                                        </section>
                                    </section>
                                    <section class="form-group">
                                        <label>Se vende por:</label>
                                        <select name="measurement_unit" class="form-control">
                                            <?php foreach($measurement_unit as $key => $value):?>
                                            <option value="<?=$value->id?>"><?=$value->name?></option>
                                            <?php endforeach; ?>  
                                        </select>
                                    </section>
                                </section>
                                <section class="col-md-6">
                                    <section class="form-group">
                                        <label>Categoría</label>
                                        <select name="category" class="form-control">
                                            <?php foreach($category as $key => $value):?>
                                            <option value="<?=$value->id?>"><?=$value->name?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </section>
                                    <section class="form-group">
                                        <label>Suplidor</label>
                                        <select name="supplier" class="form-control">
                                            <?php foreach($supplier as $key => $value):?>
                                            <option value="<?=$value->id?>"><?=$value->name?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </section>
                                    <section class="form-group">
                                        <label>Imagen de portada del producto</label>
                                        <input type="file" name="image_url" class="form-control" />
                                    </section>
                                </section>
                            </section>
                            <section class="row">
                                <section class="col-md-12">
                                    <section class="form-group">
                                        <label>Descripción del producto</label>
                                        <textarea name="description" class="form-control" placeholder="Descripcion"></textarea>
                                    </section>
                                </section>
                            </section>
                            <section class="row">
                                <section class="col-md-2 col-md-offset-10">
                                    <button class="btn btn-default" type="submit">Añadir producto</button>
                                </section>
                            </section>
                        </form>
                    </section>
                </section>
            </section>
        </section>
    </section>