<?php
session_start();

require_once("database.php");

$user=$_POST['user'];
$pass = $_POST['pass'];

$sql  = "SELECT * FROM testsignup WHERE usuario = '$user' AND password = '$pass'";

$resultado = $conexion->query($sql);

if($row = mysqli_fetch_array($resultado)){
	$_SESSION['user'] = $user;
	$_SESSION['pass'] = $pass;
	
	echo $_SESSION['user'] . " " .$_SESSION['pass'];
}else{
	echo "error";
}

?>