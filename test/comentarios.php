<?php

include("database.php");

$post_id = $_POST['post_id'];
$user_id = $_POST['user_id'];
$comentario = $_POST['comentario'];

$sql = "INSERT INTO testpost_comentario (id_post,id_user,comentario)
VALUES ('$post_id','$user_id','$comentario')";

$conexion->query($sql);

if(mysqli_affected_rows($conexion) === 1 ){
  echo "Datos insertados";
}else{
  echo mysqli_error();
}

?>
