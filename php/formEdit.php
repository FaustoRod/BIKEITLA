<?php
session_start();
include("database.php");

$nombre= $_POST['nombreEdit'];
$apellido=$_POST['apellidoEdit'];
$pass=$_POST['passEdit'];
$id=$_SESSION['id_user'];

echo $nombre. " " . $apellido." ".$id;

$query= "UPDATE usuario set nombre='$nombre',apellido='$apellido',clave='$pass' WHERE id ='$id'";
echo $query;
$conexion->query($query);

if(mysqli_affected_rows($conexion)===1){

  header("Location:../index.php");
  echo "<script>alert('Su informacion fue modificada') </script>";
}
else {
  echo mysqli_error($conexion);

}




 ?>
