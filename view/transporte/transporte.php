<h1 class="page-header">Control de Arribos</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Transporte&a=Crud">Nuevo Transporte</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Folio</th>
            <th>Cliente</th>
            <th>Marca</th>
            <th style="width:120px;">Destino</th>
            <th style="width:120px;">Servicio</th>
            <th style="width:60px;">Estatus</th>
            
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->Folio; ?></td>
            <td><?php echo $r->Cliente; ?></td>
            <td><?php echo $r->Marca; ?></td>
	    <td><?php echo $r->Destino; ?></td>
            <td><?php echo $r->Servicio == 1 ? 'Carga' : 'Devolucion' ; ?></td>
            
            <td>
                <a href="?c=Transporte&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Transporte&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
