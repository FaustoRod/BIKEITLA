<?php

require_once("database.php");

if(isset($_FILES['foto'])){
	$id = $_POST['id_post_para_foto'];
	$tmp_name = $_FILES['foto']['tmp_name'];


	for($i=0;$i < count($tmp_name);$i++){
		$dir = "../img/perfilFotos/".basename($_FILES['foto']['name'][$i]);
		$file = $_FILES['foto']['tmp_name'][$i];

		if(move_uploaded_file($file,$dir)){
			echo "SE METIO  AL ARC";
			$pic = $dir;

			$sql = "INSERT INTO publicaciones_fotos (id_publicacion,foto,nombreFoto)
			VALUES ('$id','$pic','$pic')";

			$conexion->query($sql);

			if($conexion->affected_rows ===1){
				echo "a la base de dato";
				echo $id;
			}
		}else{
			echo "erro";
		}
	}



}

?>
