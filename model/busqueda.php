<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Informacion General</title>
  </head>
  <body>
    <a><img src="../assets/img/logo.png" width="200"></a>
    <h1>Informacion General del Folio</h1>
    <?php
    if(!empty($_POST['buscar'])){
        //DB details
        $dbHost = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'cargamentos';

        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        if ($db->connect_error) {
            die("Unable to connect database: " . $db->connect_error);
        }

        //get content from database
        $query = $db->query("SELECT * FROM folios WHERE Folio= '".$_POST['buscar']."'");
        $querydos = $db->query("SELECT * FROM respaldo WHERE Folio= '".$_POST['buscar']."'");
        $rowdos = mysqli_fetch_array($querydos);
        $row = mysqli_fetch_array($query);
        ?><table><tbody><?php
        echo 'Folio: '.$row['Folio'].'<br />';
        echo 'Area: '.$row['Area'].'<br />';
        echo 'Cliente: '.$row['Cliente'].'<br />';
        echo 'Marca: '.$row['Marca'].'<br />';
        echo 'Destino: '.$row['Destino'].'<br />';
        echo 'Servicio: '.$row['Servicio'].'<br />';
        echo 'Fecha y hora por llegar: '.$row['FH_Carga'].'<br />';
        echo 'Transporte: '.$row['Transporte'].'<br />';
        echo 'Operador: '.$row['Operador'].'<br />';
        echo 'Cantidad de Unidades: '.$row['CantidadUnidades'].'<br />';
        echo 'Cortina: '.$row['Cortina'].'<br />';
        echo 'Usuario del Registro: '.$row['Usuario1'].'<br />';
        echo 'Fecha del Registro: '.$row['FH_Cedic'].'<br />';
        echo 'Estatus: '.$row['Estatus'].'<br />';
        echo 'Observaciones: '.$row['Observaciones'].'<br />'.'<br />';
        echo 'Usuario Caseta 2: '.$row['Usuario2'].'<br />';
        echo 'Fecha del Registro: '.$row['FH_Arribo'].'<br />';
        echo 'Estatus: '.$row['Estatus2'].'<br />';
        echo 'Observaciones: '.$row['Observaciones2'].'<br />'.'<br />';
        echo 'Usuario Prevension: '.$row['Usuario3'].'<br />';
        echo 'Fecha del Registro: '.$row['FH_Inicio_CarDesc'].'<br />';
        echo 'Estatus: '.$row['Estatus3'].'<br />';
        echo 'Observaciones: '.$row['Observaciones3'].'<br /><br />';
        echo 'Usuario Prevension: '.$row['Usuario4'].'<br />';
        echo 'Fecha del Registro: '.$row['FH_Conclu_CarDesc'].'<br />';
        echo 'Estatus: '.$row['Estatus4'].'<br />';
        echo 'Observaciones: '.$row['Observaciones4'].'<br /><br />';
        echo 'Usuario Caseta 2: '.$row['Usuario5'].'<br />';
        echo 'Fecha del Registro: '.$row['FH_Salida_Caseta'].'<br />';
        echo 'Estatus: '.$row['Estatus5'].'<br />';
        echo 'Observaciones: '.$row['Observaciones5'].'<br /><br />';
      ?><tbody></table><?php
    }else{
        echo 'Folio no encontrado';
    }
    ?>

  </body>
</html>
