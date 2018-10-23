<h1 class="page-header">
    <?php echo $alm->Folio != null ? $alm->Nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Transporte">Folio</a></li>
  <li class="active"><?php echo $alm->Folio != null ? $alm->Cliente : 'Nuevo Registro'; ?></li>
</ol>

<form Clave="frm-transporte" action="?c=Transporte&&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="Clave" value="<?php echo $alm->Clave; ?>" />
    
    <div class="form-group">
        <label>Folio</label>
        <input type="text" name="Folio" value="<?php echo $alm->Folio; ?>" class="form-control" placeholder="Ingrese Folio" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Cliente</label>
        <input type="text" name="Cliente" value="<?php echo $alm->Cliente; ?>" class="form-control" placeholder="Ingrese Cliente" data-validacion-tipo="requerido|min:10" />
    </div>
    
    <div class="form-group">
        <label>Marca</label>
        <input type="text" name="Marca" value="<?php echo $alm->Marca; ?>" class="form-control" placeholder="Ingrese la Marca del Cargamento" data-validacion-tipo="requerido|min:10" />
    </div>
    
    <div class="form-group">
        <label>Destino</label>
        <input type="text" name="Destino" value="<?php echo $alm->Destino; ?>" class="form-control" placeholder="Ingrese el destino del Cargamento" data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Servicio</label>
        <select name="Servicio" class="form-control">
            <option <?php echo $alm->Servicio == 1 ? 'selected' : ''; ?> value="1">Carga</option>
            <option <?php echo $alm->Servicio == 2 ? 'selected' : ''; ?> value="2">Recibo</option>
	         <option <?php echo $alm->Servicio == 3 ? 'selected' : ''; ?> value="3">Devolucion</option>
        </select>
    </div>
    
    <div class="form-group">
        <label>Estatus</label>
        <input type="text" name="Estatus" value="<?php echo $alm->Estatus; ?>" class="form-control" placeholder="Estatus" data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Observaciones</label>
        <input type="text" name="Observaciones" value="<?php echo $alm->Observaciones; ?>" class="form-control" placeholder="Observaciones" data-validacion-tipo="requerido|min:10" />
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