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
			$row=mysqli_fetch_array($resultado);
			$area=$row['area'];

			if($filas==1 && $area=="Caseta")
			{
					$_SESSION['txtusuario']=$usuario;
					header("Location: ../seguridad.php");
			}
			if ($filas==1 && $area=="Prevension") {
					$_SESSION['txtusuario']=$usuario;
					header("Location: ../prevension.php");
			}
			if ($filas==1 && $area=="Gerente") {
					$_SESSION['txtusuario']=$usuario;
					header("Location: ../gerente.php");
			}
			if ($filas==1 && $area=="L1bre") {
					$_SESSION['txtusuario']=$usuario;
					header("Location: ../operacionesl1b.php");
			}
			if ($filas==1 && $area=="Logistica Inversa") {
					$_SESSION['txtusuario']=$usuario;
					header("Location: ../operacionesli.php");
			}
			if ($filas==1 && $area=="Movilidad") {
					$_SESSION['txtusuario']=$usuario;
					header("Location: ../operacionesmov.php");
			}
			if ($filas==1 && $area=="Proyectos") {
					$_SESSION['txtusuario']=$usuario;
					header("Location: ../operacionespro.php");
			}
			if ($filas==1 && $area=="Recibo") {
					$_SESSION['txtusuario']=$usuario;
					header("Location: ../operacionesrec.php");
			}
			if ($filas==1 && $area=="Retail") {
					$_SESSION['txtusuario']=$usuario;
					header("Location: ../operacionesret.php");
			}
			else
			{
				?>
				 <script languaje="javascript">
					alert("El Nombre y/o Clave de Usuario es Incorrecto!");
					location.href = "../index.html";
				 </script>
				<?php
			}
		}

?>
