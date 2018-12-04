<!DOCTYPE html>
<html lang="en" dir="ltr">
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
        $row = mysqli_fetch_array($query);
        ?><table><tbody><?php
        echo '<td>'.'Folio: '.$row['Folio'].'</td>';
        echo '<td>'.'Area: '.$row['Area'].'</td>';
        echo 'Cliente: '.$row['Cliente'].'<br />';
        echo 'Marca: '.$row['Marca'].'<br />';
        echo 'Destino: '.$row['Destino'].'<br />';
        echo 'Servicio: '.$row['Servicio'].'<br />';
        echo 'Cantidad de Unidades: '.$row['CantidadUnidades'].'<br />';
        echo 'Cortina: '.$row['Cortina'].'<br />';
        echo 'Estatus del Producto: '.$row['EstatusProducto'].'<br />';
        echo '<pre>'.'1er Usuario: '.$row['Usuario1'].'        '.'Fecha del Registro: '.$row['FH_Cedic'].'        '.'Estatus: '.$row['Estatus'].'        '.'Observaciones: '.$row['Observaciones'].'<br />';
        echo '2do Usuario: '.$row['Usuario2'].'        '.'Fecha del Registro: '.$row['FH_Arribo'].'        '.'Estatus: '.$row['Estatus2'].'        '.'Observaciones: '.$row['Observaciones2'].'<br />';
        echo '3er Usuario: '.$row['Usuario3'].'        '.'Fecha del Registro: '.$row['FH_Inicio_CarDesc'].'        '.'Estatus: '.$row['Estatus3'].'        '.'Observaciones: '.$row['Observaciones3'].'<br />';
        echo '4to Usuario: '.$row['Usuario4'].'        '.'Fecha del Registro: '.$row['FH_Conclu_CarDesc'].'        '.'Estatus: '.$row['Estatus4'].'        '.'Observaciones: '.$row['Observaciones4'].'<br />';
        echo '5to Usuario: '.$row['Usuario5'].'        '.'Fecha del Registro: '.$row['FH_Salida_Caseta'].'        '.'Estatus: '.$row['Estatus5'].'        '.'Observaciones: '.$row['Observaciones5'].'<br />'.'</pre>';
      ?><tbody></table><?php
    }else{
        echo 'Folio no encontrado';
    }
    ?>

  </body>
</html>
