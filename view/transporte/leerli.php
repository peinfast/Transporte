<h1 class="page-header"></h1>
<table>
    <thead>
        <tr>
          <th style="width:180px;">Folio</th>
          <th style="width:120px;">Area</th>
          <th style="width:120px;">Cliente</th>
          <th style="width:120px;">Marca</th>
          <th style="width:120px;">Destino</th>
          <th style="width:120px;">Servicio</th>
          <th style="width:120px;">FH Carga</th>
          <th style="width:120px;">Estatus</th>
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
          </tr>
      <?php endforeach; ?>
    </tbody>
</table>
