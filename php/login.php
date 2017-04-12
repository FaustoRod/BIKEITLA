<?php
session_start();

require_once("database.php");

$user =$_POST['user'];
$pass = $_POST['pass'];

$sql  = "SELECT * FROM usuario WHERE usuario = '$user' AND clave= '$pass'";

$resultado = $conexion->query($sql);

if($row = mysqli_fetch_array($resultado)){
	$_SESSION['id_user'] = $row['id'];
	$_SESSION['user'] = $user;
	$_SESSION['pass'] = $pass;
	$_SESSION['tipo'] = $row['tipo'];

	header("Location:../index.php");


}else{
	echo "error";
}

?>
