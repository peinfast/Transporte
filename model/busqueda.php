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
    echo $row['Folio'].' '.$row['Area'].' '.$row['Cliente'].' '.$row['Marca'].' '.$row['Destino'].' '.$row['Servicio'].' '.$row['Estatus5'].' ';
    echo $row['Estatus4'].' '.$row['Estatus3'].' '.$row['Estatus2'].' '.$row['Estatus'].' '.$row['Usuario5'].' '.$row['Usuario4'].' '.$row['Usuario3'].' ';
    echo $row['Usuario2'].' '.$row['Usuario1'].' '.$row['Observaciones5'].' '.$row['Observaciones4'].' '.$row['Observaciones3'].' '.$row['Observaciones2'].' '.$row['Observaciones'].' '.$row['Cortina'].' ';
    echo $row['FH_Salida_Caseta'].' '.$row['FH_Conclu_CarDesc'].' '.$row['FH_Inicio_CarDesc'].' '.$row['FH_Arribo'].' '.$row['FH_Cedic'].' '.$row['FH_Carga'];
}else{
    echo 'Folio no encontrado';
}
?>
