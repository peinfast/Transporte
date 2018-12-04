<h1 class="page-header">
</h1>
<h2>Caseta Salida</h2>
<ol class="breadcrumb">
  <li><a href="?c=Transporte">Folio</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->Folio : 'Actualizacion Salida'; ?></li>
</ol>

<form id="frm-transporte" action="?c=Transporte&a=GActuaout" method="post" enctype="multipart/form-data">

  <div class="form-group">
      <label>Folio</label>
      <input type="text" name="Folio" value="<?php echo $alm->Folio; ?>" required class="form-control" placeholder="Folio" />
  </div>

  <div class="form-group">
      <label>Estatus</label>
      <select name="Estatus5" class="form-control">
          <option value="Liberado de Cedic">Liberado de Cedic</option>
          <option value="Incidencia">Incidencia</option>
      </select>
  </div>

    <input type="hidden" name="Usuario5" value="<?php

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
        <input type="text" name="Observaciones5" value="<?php echo $alm->Observaciones5; ?>" required class="form-control" placeholder="Observaciones" />
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
