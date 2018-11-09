<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->Folio : 'Inicio de Carga/Descarga'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Transporte">Folio</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->Folio : 'Actualizacion Inicio de Carga/Descarga'; ?></li>
</ol>

<form id="frm-transporte" action="?c=Transporte&a=GCarga" method="post" enctype="multipart/form-data">

  <div class="form-group">
      <label>Folio</label>
      <input type="text" name="Folio" value="<?php echo $alm->Folio; ?>" class="form-control" placeholder="Folio" />
  </div>

  <div class="form-group">
      <label>Estatus</label>
      <select name="Estatus3" class="form-control">
          <option value="En ">En Cortina</option>
          <option value="En proceso de Carga y Descarga">En proceso de Carga y Descarga</option>
          <option value="Incidencia">Incidencia</option>
      </select>
  </div>

    <input type="hidden" name="Usuario3" value="<?php echo $user; ?>" class="form-control">

    <div class="form-group">
        <label>Observaciones</label>
        <input type="text" name="Observaciones3" value="<?php echo $alm->Observaciones3; ?>" class="form-control" placeholder="Observaciones" />
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
