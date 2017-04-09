<?php

$id=$_GET['id'];

include("database.php");
$sql = "SELECT 	imagen FROM ads WHERE id = {$id}";
$r = $conexion->query($sql);
if($row = mysqli_fetch_array($r)){
  echo $row['imagen'];
}

 ?>
