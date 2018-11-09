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
			$tipo=$row['access'];

			if($filas==1 && $tipo==1)
			{
					$_SESSION['txtusuario']=$usuario;

					header("Location: ../index.php");
			}
			if ($filas==1 && $tipo==2) {
					$_SESSION['txtusuario']=$usuario;
					header("Location: ../inicio.php");
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
