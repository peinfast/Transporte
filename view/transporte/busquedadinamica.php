<?php

      require_once 'model/database.php';
      $fechaactual = Date("Y-m-d H:i:s");
      $fechaevento = $row['FH_Carga'];
      if ($fechaactual > $fechaevento) {

        $prioridad_color = array(
        'Alta' => '#DD0000',
        'Baja' => '#FF00FF',
        'Media' => '#151572'
      );

        echo "<tr bgcolor=' ". $prioridad_color[$row[prioridad]] ."'>

        <td>$row[id]</td>
        <td>$row[encargado]</td>
        <td>$row[prioridad]</td>
        <td>$row[fechapro]</td>
        <td>$row[numeropc]</td>
        <td>$row[detalle]</td>
        <td>$row[estado]</td>
        <td>$row[fechare]</td>
        </tr>";

        }
?>
