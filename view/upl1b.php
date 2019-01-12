<!DOCTYPE html>
<html lang="es">
	<header>
        <meta name="viewport" content="width=device-widht,user-scalable=no,initial-scale=1.0,masimum-scale=1.0,minimun-scale=1.0" charset="utf-8"/>

        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
				<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" href="assets/css/bootstrap.css"/>
        <link rel="stylesheet" href="assets/css/main.css"/>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
				<script>
function sendRequest(){
  $.ajax({
    url: "ajax/count.php",
    success:
      function(result){
/* si es success mostramos resultados */
       $('#mytable').text(result);
    },
    complete: function() {
/* solo una vez que la petición se completa (success o no success)
   pedimos una nueva petición en 3 segundos */
       setTimeout(function(){
         sendRequest();
       }, 3000);
      }
    });
  };

/* primera petición que echa a andar la maquinaria */
$(function() {
    sendRequest();
});

</script>

	</header>
    <body>
		<?php
		  session_start();
		  if(isset($_SESSION['txtusuario'])){
		    $usuases=$_SESSION['txtusuario'];
		    $user=htmlspecialchars($usuases);
		  }
			include 'sidel1b.php';
		 ?>
    <div class="container">
