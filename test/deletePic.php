<?php
require_once("database.php");
if(isset($_POST['id'])){
$id_post = $_POST['id'];
$picName = $_POST['name'];


$sql = "DELETE FROM post_fotos WHERE id_post = $id_post AND nombrefile = '$picName'";

$conexion->query($sql);
if(mysqli_affected_rows($conexion)===1){
 echo "eliminada la foto";
}else{
  echo "nada";
}
};


?>
