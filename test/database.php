<?php

$conexion = new mysqli('localhost','root','f5880509');
$conexion->select_db("final");

if(mysqli_connect_error()){
	echo mysqli_connect_error();
}

?>
