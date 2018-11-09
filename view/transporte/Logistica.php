<h1 class="page-header">Logistica Inversa</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Transporte&a=Crud">Nuevo Folio</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Folio</th>
            <th style="width:120px;">Area</th>
            <th>Cliente</th>
            <th>Marca</th>
            <th>Cantidad</th>
            <th style="width:120px;">Destino</th>
            <th style="width:120px;">Servicio</th>
            <th style="width:120px;">FH Carga</th>
            <th style="width:120px;">Estatus</th>

        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Logistica() as $r): ?>
        <tr>
            <td><?php echo $r->Folio; ?></td>
            <td><?php echo $r->Area; ?></td>
            <td><?php echo $r->Cliente; ?></td>
            <td><?php echo $r->Marca; ?></td>
            <td><?php echo $r->Cantidad; ?></td>
            <td><?php echo $r->Destino; ?></td>
            <td><?php echo $r->Servicio == 1 ? 'Carga' : 'Devolucion' ; ?></td>
            <td><?php echo $r->FH_Carga; ?></td>
            <td><?php echo $r->Estatus; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
