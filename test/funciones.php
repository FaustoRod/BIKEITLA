<?php
include("database.php");

function viewall($id){
	$sql ="SELECT testsignup.nombre as user_name,testsignup.apellido AS
	user_apellido,testsignup.region AS user_region,testsignup.provincia
	AS user_provincia,testsignup.municipio AS user_municipio,testsignup.telefono1
	AS user_telefono, testpost.titulo as titulo,testpost.marca as marca,
 testpost.modelo as modelo, testpost.tipo as tipo, testpost.clasificacion,
 testpost.descripcion as descripcion FROM testpost INNER JOIN testsignup on
 testpost.id_user= testsignup.id";

	$resultado = $conexion->query($sql);

	while($row = mysqli_fetch_array($resultado)){
		echo 'nombre: ' . $row['user_name'];
	}

}

function viewpics($id){
	$sql = "SELECT post_fotos.id_post, foto FROM post_fotos INNER JOIN testpost ON
	post_fotos.id_post=testpost.id_post WHERE testpost.status = 1
	AND post_fotos.id_post = $id";

	$resultado = $conexion->query($sql);

	while($row = mysqli_fetch_array($resultado)){
		$x = 1;
		echo "<img style='width:200px;margin:5px;' src=" .$row['foto'].">";

	}
}

function deletePic($post,$name){
	$sql = "DELETE FROM post_fotos WHERE id_post = $post AND nombrefile = $name";

	$conexion->query($sql);

	if(mysqli_affected_rows($conexion)===1){
		echo "eliminada la foto";
	}
}

?>
