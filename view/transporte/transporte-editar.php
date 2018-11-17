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
        <input type="text" name="Folio" value="<?php echo $alm->Folio; ?>" class="form-control" placeholder="Ingrese Folio" />
    </div>

    <div class="form-group">
        <label>Area</label>
        <select name="Area" class="form-control">
            <option value="L1bre">L1bre</option>
            <option value="Logistica Inversa">Logistica Inversa</option>
            <option value="Movilidad">Movilidad</option>
            <option value="Proyectos">Proyectos</option>
            <option value="Recibo">Recibo</option>
            <option value="Retail">Retail</option>
        </select>
    </div>

    <div class="form-group">
        <label>Cliente</label>
        <input type="text" name="Cliente" value="<?php echo $alm->Cliente; ?>" class="form-control" placeholder="Ingrese Cliente" />
    </div>

    <div class="form-group">
        <label>Marca</label>
        <input type="text" name="Marca" value="<?php echo $alm->Marca; ?>" class="form-control" placeholder="Ingrese la Marca del Cargamento" />
    </div>
    <div class="form-group">
        <label>Cantidad de Unidades</label>
        <select name="CantidadUnidades" class="form-control">
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

        </select>
    </div>
    <div class="form-group">
        <label>Destino</label>
        <input type="text" name="Destino" value="<?php echo $alm->Destino; ?>" class="form-control" placeholder="Ingrese el destino del Cargamento" />
    </div>
    <div class="form-group">
        <label>Servicio</label>
        <select name="Servicio" class="form-control">
            <option value="Carga">Carga</option>
            <option value="Recibo">Recibo</option>
            <option value="Devolucion">Devolucion</option>
        </select>
    </div>

    <div class="form-group">
        <label>Fecha/hora de carga</label>
        <input type="datetime" name="FH_Carga" value="<?php echo $alm->FH_Carga; ?>" class="form-control" placeholder="AAAA-MM-DD HH:MM:SS" />
    </div>

    <input type="hidden" name="Estatus" value="Por arribar" class="form-control">

    <input type="hidden" name="FH_Cedic" value="<<?php echo $fechaactua; ?>" class="form-control">

    <input type="hidden" name="Usuario1" value="<?php echo $user; ?>" class="form-control">

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
