<h1 class="page-header">Recibo</h1>

<div class="well well-sm text-right">
    <form action='control/control.php' method='post' enctype="multipart/form-data">
        <input type='file' name='sel_file' size='20'>
        <input type='submit' name='submit' value='submit'>
    </form>
</div>


<table>
    <thead>
        <tr>
            <th style="width:180px;">Folio</th>
            <th style="width:120px;">Cliente</th>
            <th style="width:120px;">Marca</th>
            <th style="width:120px;">Destino</th>
            <th style="width:120px;">Servicio</th>
            <th style="width:120px;">FH Carga</th>
            <th style="width:120px;">Estatus</th>

        </tr>
    </thead>
    <tbody>
      <?php foreach($this->model->rojoRec() as $r): ?>
          <tr style="background-color: tomato;">
              <td><?php echo $r->Folio; ?></td>
              <td><?php echo $r->Cliente; ?></td>
              <td><?php echo $r->Marca; ?></td>
              <td><?php echo $r->Destino; ?></td>
              <td><?php echo $r->Servicio == 1 ? 'Carga' : 'Devolucion' ; ?></td>
              <td><?php echo $r->FH_Carga; ?></td>
              <td><?php
              if (($r->Estatus2==null) AND ($r->Estatus3==null) AND ($r->Estatus4==null) AND ($r->Estatus5==null)) {
                  echo $r->Estatus;
              }
              elseif (($r->Estatus3==null) AND ($r->Estatus4==null) AND ($r->Estatus5==null)) {
                  echo $r->Estatus2;
              }
              elseif (($r->Estatus4==null) AND ($r->Estatus5==null)) {
                  echo $r->Estatus3;
              }
              elseif ($r->Estatus5==null) {
                  echo $r->Estatus4;
              }
              else{
                  echo $r->Estatus5;
              } ?></td>
              <td>
                 <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Transporte&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
              </td>
          </tr>
      <?php endforeach; ?>
      <?php foreach($this->model->amarilloRec() as $r): ?>
          <tr style="background-color: yellow;">
              <td><?php echo $r->Folio; ?></td>
              <td><?php echo $r->Cliente; ?></td>
              <td><?php echo $r->Marca; ?></td>
              <td><?php echo $r->Destino; ?></td>
              <td><?php echo $r->Servicio; ?></td>
              <td><?php echo $r->FH_Carga; ?></td>
              <td><?php
              if (($r->Estatus2==null) AND ($r->Estatus3==null) AND ($r->Estatus4==null) AND ($r->Estatus5==null)) {
                  echo $r->Estatus;
              }
              elseif (($r->Estatus3==null) AND ($r->Estatus4==null) AND ($r->Estatus5==null)) {
                  echo $r->Estatus2;
              }
              elseif (($r->Estatus4==null) AND ($r->Estatus5==null)) {
                  echo $r->Estatus3;
              }
              elseif ($r->Estatus5==null) {
                  echo $r->Estatus4;
              }
              else{
                  echo $r->Estatus5;
              }
               ?></td>
               <td>
                  <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Transporte&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
               </td>
          </tr>
      <?php endforeach; ?>
      <?php foreach($this->model->verdeRec() as $r): ?>
          <tr style="background-color: green;">
              <td><?php echo $r->Folio; ?></td>
              <td><?php echo $r->Cliente; ?></td>
              <td><?php echo $r->Marca; ?></td>
              <td><?php echo $r->Destino; ?></td>
              <td><?php echo $r->Servicio; ?></td>
              <td><?php echo $r->FH_Carga; ?></td>
              <td><?php
              if (($r->Estatus2==null) AND ($r->Estatus3==null) AND ($r->Estatus4==null) AND ($r->Estatus5==null)) {
                  echo $r->Estatus;
              }
              elseif (($r->Estatus3==null) AND ($r->Estatus4==null) AND ($r->Estatus5==null)) {
                  echo $r->Estatus2;
              }
              elseif (($r->Estatus4==null) AND ($r->Estatus5==null)) {
                  echo $r->Estatus3;
              }
              elseif ($r->Estatus5==null) {
                  echo $r->Estatus4;
              }
              else{
                  echo $r->Estatus5;
              }
               ?></td>
               <td>
                  <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Transporte&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
               </td>
          </tr>
      <?php endforeach; ?>
    </tbody>
</table>
