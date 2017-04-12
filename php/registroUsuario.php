<?php


require_once("database.php");

$dir = "C:/AppServ/www/BIKEITLA/img/perfilFotos/".basename($_FILES['fotoPerfil']['name']);
$archivo = $_FILES['fotoPerfil']['tmp_name'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$password = $_POST['pass'];
$email = $_POST['email'];
$region = $_POST['region'];
$provincia = $_POST['provincia'];
$municipio = $_POST['municipio'];
$telefono1 = $_POST['telefono'];
$telefono2 = $_POST['telefono2'];

if(move_uploaded_file($archivo,$dir)){
	$foto = $dir;
};


$sql = "INSERT INTO usuario (nombre,apellido,usuario,clave,email,region
	,provincia,municipio,telefono1,telefono2,foto)
	 VALUES ('$nombre','$apellido','$usuario','$password','$email','$region',
	'$provincia','$municipio','$telefono1','$telefono2','$foto')";

$conexion->query($sql);


if(mysqli_affected_rows($conexion)===1){
	header("Location:../index.php");

}else{
	$conexion->connect_error();
}

?>
