<?php

  Session_start();

  if(empty($_SESSION['user'])){
    header("Location:../views/RegistroForm.html");
  }else{
    header("Location:../views/AnuncioForm.php");
  }

?>
