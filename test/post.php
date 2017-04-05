<?php

require_once("database.php");

$id_user = $_POST['id_user'];
$titulo = $_POST['titulo'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$tipo = $_POST['tipo'];
$clasificacion = $_POST['clasificacion'];
$descripcion = $_POST['descripcion'];

$sql = "INSERT INTO testpost (id_user,titulo,marca,modelo,tipo,clasificacion,descripcion) VALUES ('$id_user','$titulo','$marca','$modelo','$tipo','$clasificacion','$descripcion')"  ;

$conexion->query($sql);

if($conexion->affected_rows === 1){
	echo "insertado";
	header("refresh:2;url=loadpic2.html");

}else{
echo "error";
}


/*

"SELECT testsignup.nombre as user_name,testsignup.apellido AS user_apellido,testsignup.region AS user_region,testsignup.provincia AS user_provincia,testsignup.municipio AS user_municipio,testsignup.telefono1 AS user_telefono, testpost.titulo as titulo,testpost.marca as marca, testpost.modelo as modelo, testpost.tipo as tipo, testpost.clasificacion,testpost.descripcion as descripcion FROM testpost INNER JOIN testsignup on testpost.id_user=testsignup.id"


echo $row['user_name']. " ".$row['user_apellido']. " ".$row['user_region']. " ".$row['user_provincia']. " ".$row['user_municipio']. " ".$row['user_telefono']. " ".$row['titulo']. " ".$row['marca']. " ".$row['modelo']. " ".$row['tipo']. " ".$row['clasificacion']. " ".$row['descripcion'];


*/
?>
