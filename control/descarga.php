<?php
$conexion = mysqli_connect ("localhost", "root", "");

mysqli_select_db ($conexion, "folios");

$sql = "SELECT * FROM folios";

$resultado = mysqli_query ($conexion, $sql) or die (mysql_error ());

$libros = array();

while( $rows = mysqli_fetch_assoc($resultado) ) {

$libros[] = $rows;

}

mysqli_close($conexion);


 ?>
