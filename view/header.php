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

	</header>
    <body>
		<?php
		  session_start();
		  if(isset($_SESSION['txtusuario'])){
		    $usuases=$_SESSION['txtusuario'];
		    $user=htmlspecialchars($usuases);
		  }
			include 'menu.php';
		 ?>
    <div class="container">
