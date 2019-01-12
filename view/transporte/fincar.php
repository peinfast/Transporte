<h1 class="page-header">
</h1>
<h2>Carga/Descarga Concluida</h2>

<form id="frm-transporte" action="?c=Transporte&a=GCargaout" method="post" enctype="multipart/form-data">

  <div class="form-group">
      <label>Folio</label>
      <input type="text" name="Folio" value="<?php echo $alm->Folio; ?>" required class="form-control" placeholder="Folio" />
  </div>

  <div class="form-group">
      <label>Estatus</label>
      <input type="text" name="Estatus4" value="Carga/Descarga Concluida" readonly="readonly" required class="form-control" />
  </div>

    <input type="hidden" name="Usuario4" value="<?php
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
    ?>"  class="form-control">

    <div class="form-group">
        <label>Observaciones</label>
        <input type="text" name="Observaciones4" value="<?php echo $alm->Observaciones4; ?>" required class="form-control" />
    </div>

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
