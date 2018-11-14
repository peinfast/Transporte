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
    echo $row['Folio'].', ' $row['Cliente'];

}else{
    echo 'Content not found....1';
}
?>
