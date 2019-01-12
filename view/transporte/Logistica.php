<h1 class="page-header"></h1>

<table>
    <thead>
        <tr>
          <th style="width:180px;">Folio</th>
          <th style="width:180px;">Area</th>
          <th style="width:180px;">Cliente</th>
          <th style="width:180px;">Marca</th>
          <th style="width:180px;">Destino</th>
          <th style="width:180px;">Servicio</th>
          <th style="width:180px;">FH Carga</th>
          <th style="width:180px;">Estatus</th>
          <th style="width:80px;">Editar</th>
          <th style="width:80px;">Eliminar</th>
        </tr>
    </thead>
    <tbody>
      <?php foreach($this->model->warli() as $r): ?>
          <tr style="background-color: red;">
              <td><?php echo $r->Folio; ?></td>
              <td><?php echo $r->Area; ?></td>
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
               <td style="background-color: white;">
                    <a href="?c=Transporte&a=Editarli&id=<?php echo $r->id; ?>"><img src="assets/img/editar.png" width="50"></a>
               </td>
               <td style="background-color: white;">
                  <a href="?c=Transporte&a=Eliminar&id=<?php echo $r->id; ?>" data-toggle="modal" data-target="#exampleModa"><img src="assets/img/eliminar.png" width="50"></a>
               </td>
          </tr>
      <?php endforeach; ?>
      <?php foreach($this->model->azulLI() as $r): ?>
          <tr style="background-color: MEDIUMSLATEBLUE;">
              <td><?php echo $r->Folio; ?></td>
              <td><?php echo $r->Area; ?></td>
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
               <td style="background-color: white;">
                    <a href="?c=Transporte&a=Editarli&id=<?php echo $r->id; ?>"><img src="assets/img/editar.png" width="50"></a>
               </td>
               <td style="background-color: white;">
                  <a href="?c=Transporte&a=Eliminar&id=<?php echo $r->id; ?>" data-toggle="modal" data-target="#exampleModa"><img src="assets/img/eliminar.png" width="50"></a>
               </td>
          </tr>
      <?php endforeach; ?>
    <?php foreach($this->model->rojoLI() as $r): ?>
        <tr style="background-color: tomato;">
            <td><?php echo $r->Folio; ?></td>
            <td><?php echo $r->Area; ?></td>
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
             <td style="background-color: white;">
                  <a href="?c=Transporte&a=Editarli&id=<?php echo $r->id; ?>"><img src="assets/img/editar.png" width="50"></a>
             </td>
             <td style="background-color: white;">
                <a href="?c=Transporte&a=Eliminar&id=<?php echo $r->id; ?>" data-toggle="modal" data-target="#exampleModa"><img src="assets/img/eliminar.png" width="50"></a>
             </td>
        </tr>
    <?php endforeach; ?>
    <?php foreach($this->model->amarilloLI() as $r): ?>
        <tr style="background-color: yellow;">
            <td><?php echo $r->Folio; ?></td>
            <td><?php echo $r->Area; ?></td>
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
             <td style="background-color: white;">
                  <a href="?c=Transporte&a=Editarli&id=<?php echo $r->id; ?>"><img src="assets/img/editar.png" width="50"></a>
             </td>
             <td style="background-color: white;">
                <a href="?c=Transporte&a=Eliminar&id=<?php echo $r->id; ?>" data-toggle="modal" data-target="#exampleModa"><img src="assets/img/eliminar.png" width="50"></a>
             </td>
        </tr>
    <?php endforeach; ?>
    <?php foreach($this->model->verdeLI() as $r): ?>
        <tr style="background-color: green;">
            <td><?php echo $r->Folio; ?></td>
            <td><?php echo $r->Area; ?></td>
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
             <td style="background-color: white;">
                  <a href="?c=Transporte&a=Editarli&id=<?php echo $r->id; ?>"><img src="assets/img/editar.png" width="50"></a>
             </td>
             <td style="background-color: white;">
                <a href="?c=Transporte&a=Eliminar&id=<?php echo $r->id; ?>" data-toggle="modal" data-target="#exampleModa"><img src="assets/img/eliminar.png" width="50"></a>
             </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<div class="modal fade" id="exampleModa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Motivo de cancelacion</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action='href="?c=Transporte&a=Cancelacion&id=<?php echo $r->id; ?>"' method='post' enctype="multipart/form-data">
            <textarea name="razon" rows="8" cols="65"></textarea>
            <button type="submit"  class="btn btn-primary btn-lg">Enviar</button>
        </form>
      </div>
</div>
</div>
</div>
