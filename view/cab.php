<!DOCTYPE html>
<html lang="es">
	<header>
        <meta charset="utf-8" />

        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
				<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/main.css">

        <script src="assets/js/modernizr-2.6.2.min.js"></script>

        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
				<script type="text/javascript">
				var initialDate = "24-04-2016 04:24:00"

				//Dividimos la fecha primero utilizando el espacio para obtener solo la fecha y el tiempo por separado
				var splitDate= initialDate.split(" ");
				var date=splitDate[0].split("-");
				var time=splitDate[1].split(":");

				// Obtenemos los campos individuales para todas las partes de la fecha
				var dd=date[0];
				var mm=date[1]-1;
				var yyyy =date[2];
				var hh=time[0];
				var min=time[1];
				var ss=time[2];

				// Creamos la fecha con Javascript
				var fecha = new Date(yyyy,mm,dd,hh,min,ss);
				document.write(fecha);
				var rows = document.getElementById("myTable").rows;
				for(var i = 1, ceiling = rows.length; i < ceiling; i++) {
						if (rows[i].cells[3].innerHTML == "texto-coincidir"){
								rows[i].className = "color";
						}
				}
				</script>
				<style media="screen">
					.color{
						background-color: red;
					}

				</style>
	</header>
    <body>
		<?php
		  session_start();
		  if(isset($_SESSION['txtusuario'])){
		    $usuases=$_SESSION['txtusuario'];
		    $user=htmlspecialchars($usuases);
		  }
			include 'menu.html';
		 ?>
    <div class="container">
