<?php

session_start();
$tipo = $_GET['tipo'];
$id = $_GET['id'];

if($tipo == "cliente"){
  header("Location:../views/perfilUsuario.php?id={$id}");
}else{
  header("Location:../views/adminPerfil.php");
}

?>
