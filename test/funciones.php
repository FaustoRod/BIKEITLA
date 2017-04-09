<?php


function viewall($id){
	include_once("database.php");
	$sql ="SELECT testsignup.nombre as user_name,testsignup.apellido AS
	user_apellido,testsignup.region AS user_region,testsignup.provincia
	AS user_provincia,testsignup.municipio AS user_municipio,testsignup.telefono1
	AS user_telefono, testpost.titulo as titulo,testpost.marca as marca,
 testpost.modelo as modelo, testpost.tipo as tipo, testpost.clasificacion,
 testpost.descripcion as descripcion FROM testpost INNER JOIN testsignup on
 testpost.id_user= testsignup.id WHERE testpost.id_post = {$id}";

	$resultado = $conexion->query($sql);

	if($row = mysqli_fetch_array($resultado)){
		echo 'nombre: ' . $row['user_name'];
		echo 'apellido: ' . $row['user_apellido'];
		echo 'region: ' . $row['user_region'];
		echo 'provincia: ' . $row['user_provincia'];
		echo 'municipio: ' . $row['user_municipio'];
		echo 'telefono: ' . $row['user_telefono'];
		echo 'titulo: ' . $row['titulo'];
		echo 'marca: ' . $row['marca'];
		echo 'modelo: ' . $row['tipo'];
		echo 'descripcion: ' . $row['descripcion'];
	}

}

function viewpics($id){
	include_once("database.php");
	echo $id;
	$sql = "SELECT post_fotos.id_post, foto FROM post_fotos INNER JOIN testpost ON
	post_fotos.id_post=testpost.id_post WHERE testpost.status = 1
	AND post_fotos.id_post = '$id'";


	$resultado = $conexion->query($sql);
	$num =  mysqli_num_rows($resultado);
	while($row = mysqli_fetch_array($resultado)){
		$x = 1;
		echo "<img style='width:200px;margin:5px;' src=" .$row['foto'].">";

	}
}

function viewAllProd(){
	include("database.php");
	$sql = "SELECT id_post FROM testpost";

	$resultado = $conexion->query($sql);

	while($row = mysqli_fetch_array($resultado)){
		echo "<div onclick='getProd()' style='width:300px;height:300px;border:1px solid red;
		margin:5px;cursor:pointer;' id='{$row['id_post']}' class='producto'>

		</div>";
	}
}
function viewAllMenu($sql){
include("database.php");
echo $sql;
$resultado = $conexion->query($sql);
while($row = mysqli_fetch_array($resultado)){
	echo "<div style='width:200px;height:100px;margin:2px;border:1px solid red'>

	</div>";
}
};

function getAd($id){
	include("database.php");
	$sql = "SELECT 	imagen FROM ads WHERE id = {$id}";
	$r = $conexion->query($sql);
	if($row = mysqli_fetch_array($r)){
		echo $row['imagen'];
	}
}


?>
