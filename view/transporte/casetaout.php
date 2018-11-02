<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->Folio : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Transporte">Folio</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->Folio : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-transporte" action="?c=Transporte&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />

    <div class="form-group">
        <label>Folio</label>
        <input type="text" name="Folio" value="<?php echo $alm->Folio; ?>" class="form-control"/>
    </div>

    <input type="hidden" name="Area" value="<?php echo $alm->Area; ?>" class="form-control"/>

    <input type="hidden" name="Cliente" value="<?php echo $alm->Cliente; ?>" class="form-control"/>

    <input type="hidden" name="Marca" value="<?php echo $alm->Marca; ?>" class="form-control"/>

    <input type="hidden" name="Cantidad" value="<?php echo $alm->Cantidad; ?>" class="form-control"/>

    <input type="hidden" name="Destino" value="<?php echo $alm->Destino; ?>" class="form-control" />

    <input type="hidden" name="Servicio" value="<?php echo $alm->Servicio; ?>" class="form-control" />

    <input type="hidden" name="FH_Carga" value="<?php echo $alm->FH_Carga; ?>" class="form-control"/>

    <input type="hidden" name="Estatus" value="<?php echo $alm->Estatus; ?>" class="form-control"/>

    <input type="hidden" name="FH_Cedic" value="<<?php echo $alm->FH_Cedic; ?>" class="form-control"/>

    <input type="hidden" name="Usuario1" value="<?php echo $alm->Usuario1; ?>" class="form-control"/>

    <input type="hidden" name="Cortina" value="<?php echo $alm->Cortina; ?>" class="form-control"/>

    <input type="hidden" name="FH_Arribo" value="<<?php echo $alm->FH_Arribo; ?>" class="form-control">

    <input type="hidden" name="Usuario2" value="<?php echo $alm->Usuario2; ?>" class="form-control">

    <div class="form-group">
        <label>Estatus</label>
        <select name="Sexo" class="form-control">
            <option <?php echo $alm->Estatus == 1 ? 'selected' : ''; ?> value="1">En patio</option>
            <option <?php echo $alm->Estatus == 2 ? 'selected' : ''; ?> value="2">Incidencia</option>
        </select>
    </div>

    <input type="hidden" name="FH_Carga" value="<?php echo $alm->; ?>" class="form-control"/>

    <div class="form-group">
        <label>Observaciones</label>
        <input type="text" name="Observaciones" value="<?php echo $alm->Observaciones; ?>" class="form-control" placeholder="Observaciones" />
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
