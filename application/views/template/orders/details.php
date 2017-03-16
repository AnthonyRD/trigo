    <style>

    .grid {  
  max-width: 900px;
}

/* clearfix */
.grid:after {
  content: '';
  display: block;
  clear: both;
}

/* ---- grid-item ---- */

.grid-item {
  width: 160px;
  height: 120px;
  float: left;
  background: #D26;
  border: 2px solid #333;
  border-color: hsla(0, 0%, 0%, 0.5);
  border-radius: 5px;
}

.grid-item--width2 { width: 320px; }
.grid-item--width3 { width: 480px; }
.grid-item--width4 { width: 640px; }

.grid-item--height2 { height: 200px; }
.grid-item--height3 { height: 260px; }
.grid-item--height4 { height: 360px; }


    </style>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?=$title_page?>
    <small> </small>   

      <div class="btn-group">
          <button type="button" class="btn btn-success">Seleccionar Período</button>
          <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Día</a></li>
            <li><a href="#">Semana</a></li>
            <li><a href="#">Mes</a></li>
            <li class="divider"></li>
            <li><a href="#">Trimestre</a></li>
            <li><a href="#">Semestre</a></li>
            <li><a href="#">Año</a></li>
          </ul>
        </div>        
        <span class="small">Desde</span>
          <div class="btn-group">
          <input class="datepicker small" data-date-format="mm/dd/yyyy">          
        </div>
        <span class="small">Hasta</span>
          <div class="btn-group">
          <input class="datepicker small" data-date-format="mm/dd/yyyy">          
        </div>

        <a class="btn btn-app">
          <span class="badge bg-teal">67</span>
          <i class="fa fa-inbox"></i> Órdenes
        </a>

        <a class="btn btn-app">
          <span class="badge bg-aqua">33,585</span>
          <i class="fa fa-barcode"></i> Venta
        </a>

        <a class="btn btn-app">
          <span class="badge bg-purple">300</span>
          <i class="fa fa-barcode"></i> Artículos
        </a>        
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Órdenes</li>
  </ol>
</section>
<section class="categories">
  <section class="categories-header">
    <ul>    
    </ul>
  </section>
  </section>
  <!-- Main content -->
  <section class="content container">     

   <div class="grid">
      <?php if (isset($data) && !(is_null($data))): foreach($data as $key => $value): ?>
      
  

      <div class="grid">
  <div class="grid-item"></div>
  <div class="grid-item grid-item--width2 grid-item--height2"></div>
  <div class="grid-item grid-item--height3"></div>
  <div class="grid-item grid-item--height2"></div>
  <div class="grid-item grid-item--width3"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item grid-item--height2"></div>
  <div class="grid-item grid-item--width2 grid-item--height3"></div>
  <div class="grid-item"></div>
  <div class="grid-item grid-item--height2"></div>
  <div class="grid-item"></div>
  <div class="grid-item grid-item--width2 grid-item--height2"></div>
  <div class="grid-item grid-item--width2"></div>
  <div class="grid-item"></div>
  <div class="grid-item grid-item--height2"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item grid-item--height3"></div>
  <div class="grid-item grid-item--height2"></div>
  <div class="grid-item"></div>
  <div class="grid-item"></div>
  <div class="grid-item grid-item--height2"></div>
</div>


       <?php endforeach;endif;?>

  </section>
  <!-- /.content -->