<?php
session_start();
require('conexion.php');

		if(isset($_POST['txtusuario']) and isset($_POST['txtpass']))
		{
			$usuario = $_POST['txtusuario'];
			$pass = $_POST['txtpass'];
			$sql="SELECT * FROM usuarios WHERE usuario='$usuario' AND pass='$pass'";
			$resultado=mysqli_query($pdo, $sql) or die (mysqli_error($pdo));;

			$filas=mysqli_num_rows($resultado);


			if($filas==1)
			{
					$_SESSION['txtusuario']=$usuario;
			}
			else
			{
					$fmsg = "Invalid Login Credentials.";
			}
		}
		if(isset($_SESSION['txtusuario']))
		{
				$usuario=$_SESSION['txtusuario'];
				header("Location: ../index.php");
		}
?>
