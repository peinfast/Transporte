<?php
$usuario = $_POST['txtusuario'];
$pass = $_POST['txtpass'];

$conexion=mysqli_connect("localhost","root","","cargamentos");
$sql="SELECT * FROM usuarios WHERE usuario='$usuario' AND pass='$pass'";
$resultado=mysqli_query($conexion,$sql);

$filas=mysqli_num_rows($resultado);

if($filas>0)
{
	session_start();

	if(isset($_POST['txtusuario']))
	{
		$_SESSION['userses'] = $_POST['txtusuario'];
		header("location:../index.php");
	}
	
}
else
{
	header("location:../index.html");
}
mysqli_free_result($resultado);
mysql_close($conexion);
?>
