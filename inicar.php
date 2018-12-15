<h1 class="page-header">
</h1>
<h2>Inicio de Carga/Descarga</h2>
<ol class="breadcrumb">
  <li><a href="?c=Transporte">Folio</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->Folio : 'Actualizacion Inicio de Carga/Descarga'; ?></li>
</ol>

<form id="frm-transporte" action="?c=Transporte&a=GCarga" method="post" enctype="multipart/form-data">

  <div class="form-group">
      <label>Folio</label>
      <input type="text" name="Folio" value="<?php echo $alm->Folio; ?>" required class="form-control" placeholder="Folio" />
  </div>

  <div class="form-group">
      <label>Estatus</label>
      <select name="Estatus3" class="form-control">
          <option value="En proceso de Carga y Descarga">En proceso de Carga y Descarga</option>
          <option value="En espera">En espera</option>
          <option value="Incidencia">Incidencia</option>
      </select>
  </div>
  <div class="form-group">
      <label>Cortina</label>
      <select name="Cortina" class="form-control">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
      </select>
  </div>
    <input type="hidden" name="Usuario3" value="<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'cargamentos';

    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($db->connect_error) {
        die("Unable to connect database: " . $db->connect_error);
    }
    $query = $db->query("SELECT nombre FROM usuarios WHERE usuario='$user'");
    $row = mysqli_fetch_array($query);
    $nombre=$row['nombre'];
    echo $nombre;
   ?>" class="form-control">

    <div class="form-group">
        <label>Observaciones</label>
        <input type="text" name="Observaciones3" value="<?php echo $alm->Observaciones3; ?>" required class="form-control" placeholder="Observaciones" />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-transporte").submit(function(){
            return $(this).validate();
        });
    })
</script>
