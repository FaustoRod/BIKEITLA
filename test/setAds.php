<?php

require_once("database.php");

if(isset($_FILES['ads'])){
	$tmp_name = $_FILES['ads']['tmp_name'];


	for($i=0;$i < count($tmp_name);$i++){
		$dir = "addpic/".basename($_FILES['ads']['name'][$i]);
		$file = $_FILES['ads']['tmp_name'][$i];

		if(move_uploaded_file($file,$dir)){
			echo "SE METIO  AL ARC";
			$pic = $dir;

			$sql = "INSERT INTO ads (imagen) VALUES ('$pic')";
      echo $sql;
			$conexion->query($sql);

			if($conexion->affected_rows ===1){
				echo "a la base de dato";
				echo $pic;
			}
		}else{
			echo "erro";
		}
	}



}
 ?>
