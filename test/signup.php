<?php


require_once("database.php");

$dir = "proimg/".basename($_FILES['foto']['name']);
$archivo = $_FILES['foto']['tmp_name'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$password = $_POST['pass'];
$email = $_POST['email'];
$region = $_POST['region'];
$provincia = $_POST['provincia'];
$municipio = $_POST['municipio'];
$telefono1 = $_POST['telefono1'];
$telefono2 = $_POST['telefono2'];

if(move_uploaded_file($archivo,$dir)){
	$foto = $dir;
};



$fblink = $_POST['fb'];

$sql = "INSERT INTO testsignup (nombre,apellido,usuario,password,email,region
	,provincia,municipio,telefono1,telefono2,foto,facebook)
	 VALUES ('$nombre','$apellido','$usuario','$password','$email','$region',
	'$provincia','$municipio','$telefono1','$telefono2','$foto','$fblink')";

$conexion->query($sql);


if(mysqli_affected_rows($conexion)===1){
	echo "changel";

}else{
	$conexion->connect_error();
}

?>
