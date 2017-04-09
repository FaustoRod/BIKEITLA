<?php


include("database.php");
$id = $_POST['idAd'];
$old = $_POST['oldAd'];

$dir = "addpic/".basename($_FILES['ad']['name']);
$file = $_FILES['ad']['tmp_name'];

if(move_uploaded_file($file,$dir)){
  $pic = $dir;
  $sql = "UPDATE ads SET imagen = '{$pic}' WHERE id = {$id}";
  $conexion->query($sql);
  if(mysqli_affected_rows($conexion) === 1){
    echo "Actualizada";
    header("Location:pruebaAds.php");
  }else{
    echo mysqli_error();
    echo $sql;
  }
}else{
  echo "erroa al subir archivo";
}



 ?>
