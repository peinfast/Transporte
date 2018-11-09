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
    echo $row['Folio'];
    echo $row['Cliente'];
    echo $row['Marca'];
    echo $row['Estatus'];
    echo $row['Estatus2'];
    echo $row['Estatus3'];
    echo $row['Estatus4'];
    echo $row['Estatus5'];

}else{
    echo 'Content not found....1';
}
?>
