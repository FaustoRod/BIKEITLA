<?php

  include("database.php");

  $id_post = 1;

  $sql = "SELECT testsignup.nombre AS nombre_user,testpost_comentario.comentario
  AS comentario
  FROM testsignup
  INNER JOIN testpost_comentario ON testsignup.id=testpost_comentario.id_user
  WHERE testpost_comentario.status = 1 AND testpost_comentario.id_post = 1";

  $resultado = $conexion->query($sql);

  while($row = mysqli_fetch_array($resultado)){
    echo "Nombre: " . $row['nombre_user'];
    echo "comentario: " . $row['comentario'];
  }

?>
