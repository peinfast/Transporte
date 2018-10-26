﻿<h1 class="page-header">Control de Arribos</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Transporte&a=Crud">Nuevo Folio</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Folio</th>
            <th>Cliente</th>
            <th>Marca</th>
            <th>Cantidad</th>
            <th style="width:120px;">Destino</th>
            <th style="width:120px;">Servicio</th>
            <th style="width:120px;">FH Carga</th>
            <th style="width:60px;">Estatus</th>

        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->Folio; ?></td>
            <td><?php echo $r->Cliente; ?></td>
            <td><?php echo $r->Marca; ?></td>
            <td><?php echo $r->Cantidad; ?></td>
            <td><?php echo $r->Destino; ?></td>
            <td><?php echo $r->Servicio == 1 ? 'Carga' : 'Devolucion' ; ?></td>
            <td><?php echo $r->FH_Carga; ?></td>
            <td><?php echo $r->Estatus; ?></td>

            <td>
                <a class='btn btn-success' href="?c=Transporte&a=Crud&id=<?php echo $r->id; ?>">Actualizar</a>
            </td>
            <td>
                <a class='btn btn-success' onclick="javascript:return confirm('Informacion del Folio');" href="?c=Transporte&a=Avanzada&id=<?php echo $r->id; ?>">Busqueda Avanzada</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
