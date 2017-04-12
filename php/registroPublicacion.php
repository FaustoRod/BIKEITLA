<?php
session_start();
require_once("database.php");

$id_user = $_POST['id_user'];
$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$tipo = $_POST['tipo'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];

$sql = "INSERT INTO publicaciones (id_user,titulo,categoria,tipo,marca,modelo,precio,descripcion)
 VALUES ('$id_user','$titulo','$categoria','$tipo','$marca','$modelo',$precio,'$descripcion')"  ;

$conexion->query($sql);

if($conexion->affected_rows === 1){
	echo "insertado";
  $_SESSION['id_post'] = mysqli_insert_id($conexion);
  echo $_SESSION['id_post'];
	header("refresh:2;url=../views/insertFotos.php");

}else{
echo "error";
}

?>
