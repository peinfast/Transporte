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
      <input type="text" name="Folio" value="Salvador de la Cruz" class="form-control">

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
