<?php

function viewall($conexion){
	$sql ="SELECT testsignup.nombre as user_name,testsignup.apellido AS user_apellido,testsignup.region AS user_region,testsignup.provincia AS user_provincia,testsignup.municipio AS user_municipio,testsignup.telefono1 AS user_telefono, testpost.titulo as titulo,testpost.marca as marca, testpost.modelo as modelo, testpost.tipo as tipo, testpost.clasificacion,testpost.descripcion as descripcion FROM testpost INNER JOIN testsignup on testpost.id_user=testsignup.id";
	
	$resultado = $conexion->query($sql);
	
	while($row = mysqli_fetch_array($resultado)){
		echo 'nombre: ' . $row['user_name'];
	}
	
}

function viewpics($conexion){
	$sql = "SELECT foto FROM post_fotos INNER JOIN testpost ON post_fotos.id_post=testpost.id_post";
	
	$resultado = $conexion->query($sql);
	
	while($row = mysqli_fetch_array($resultado)){
		echo "<img src=" .$row['foto'].">";
	}
}

?>