<?php

//conexiones, conexiones everywhere
ini_set('display_errors', 1);
error_reporting(E_ALL);
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$database = 'cargamentos';
$table = 'folios';
$db = new mysqli($db_host, $db_user, $db_pass, $database);
$query = $db->query("SELECT nombre FROM usuarios WHERE usuario='$user'");
$row = mysqli_fetch_array($query);
$nombre=$row['nombre'];
    if(isset($_POST['submit']))
    {
        //Aquí es donde seleccionamos nuestro csv
         $fname = $_FILES['sel_file']['name'];
         echo 'Cargando nombre del archivo: '.$fname.' <br>';
         $chk_ext = explode(".",$fname);

         if(strtolower(end($chk_ext)) == "csv")
         {
             //si es correcto, entonces damos permisos de lectura para subir
             $filename = $_FILES['sel_file']['tmp_name'];
             $handle = fopen($filename, "r");

             while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
             {
               //Insertamos los datos con los valores...
                $sql =$db->query ("INSERT into folios(Folio, Area, Cliente, Marca, Destino, Servicio, FH_Carga, Observaciones, Estatus, FH_Cedic) values('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','Por arribar',now())");

             }
             //cerramos la lectura del archivo "abrir archivo" con un "cerrar archivo"
             fclose($handle);
             echo "Importación exitosa!";
             session_start();
             header("Location:".$_SERVER['HTTP_REFERER']);

         }
         else
         {
            //si aparece esto es posible que el archivo no tenga el formato adecuado, inclusive cuando es cvs, revisarlo para
//ver si esta separado por " , "
             echo "Archivo invalido!";
         }
    }

?>
