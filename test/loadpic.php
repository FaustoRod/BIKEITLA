<?php

require_once("database.php");

if(isset($_FILES['pic'])){
	$id = $_POST['id_post'];
	$tmp_name = $_FILES['pic']['tmp_name'];


	for($i=0;$i < count($tmp_name);$i++){
		$dir = "uploadpic/".basename($_FILES['pic']['name'][$i]);
		$file = $_FILES['pic']['tmp_name'][$i];

		if(move_uploaded_file($file,$dir)){
			echo "SE METIO  AL ARC";
			$pic = $dir;

			$sql = "INSERT INTO post_fotos (id_post,foto,nombrefile)
			VALUES ('$id','$pic','$pic')";

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
