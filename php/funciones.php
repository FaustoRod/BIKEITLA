<?php

function viewAll($id){
	include_once("database.php");
	$sql = "SELECT usuario.nombre as nombre_usuario,usuario.apellido AS
  apellido_usuario,usuario.usuario AS user_usuario,usuario.email
  AS email_usuario,usuario.region AS region_usuario,usuario.provincia
  AS provincia_usuario, usuario.municipio as usuario_municipio,usuario.telefono1 as usuario_telefono,
  usuario.telefono2 as usuario_telefono2, publicaciones.id AS id ,publicaciones.titulo as titulo, publicaciones.categoria as categoria,
  publicaciones.tipo as tipo,publicaciones.marca as marca,publicaciones.modelo as modelo,
  publicaciones.precio AS precio, publicaciones.descripcion as descripcion FROM publicaciones INNER JOIN usuario on
  publicaciones.id_user= usuario.id WHERE publicaciones.id = {$id}";

	$resultado  = $conexion->query($sql);

	if($row = mysqli_fetch_array($resultado)){
		$nombre = $row['nombre_usuario'];
		$apellido=$row['apellido_usuario'];
		$usuario = $row['user_usuario'];
		$email = $row['email_usuario'];
		echo "$region = {$row['region_usuario']}";
		$provincia = $row['provincia_usuario'];
		$municipio = $row['usuario_municipio'];
		$telefono = $row['usuario_telefono'];
		$titulo = $row['titulo'];
		$categoria = $row['categoria'];
		$tipo = $row['tipo'];
		$marca = $row['marca'];
		$modelo = $row['modelo'];
		$precio = $row['precio'];
		$descripcion = $row['descripcion'];



	}
}
function viewAllProd(){
	include_once("database.php");
	$sql = "SELECT usuario.nombre as nombre_usuario,usuario.apellido AS
  apellido_usuario,usuario.usuario AS user_usuario,usuario.email
  AS email_usuario,usuario.region AS region_usuario,usuario.provincia
  AS provincia_usuario, usuario.municipio as usuario_municipio,usuario.telefono1 as usuario_telefono,
  usuario.telefono2 as usuario_telefono2, publicaciones.id AS id ,publicaciones.titulo as titulo, publicaciones.categoria as categoria,
  publicaciones.tipo as tipo,publicaciones.marca as marca,publicaciones.modelo as modelo,
  publicaciones.precio AS precio, publicaciones.descripcion as descripcion FROM publicaciones INNER JOIN usuario on
  publicaciones.id_user= usuario.id";

	$resultado = $conexion->query($sql);

	while ($row = mysqli_fetch_array($resultado)){
		$sqlFotos = "Select foto FROM publicaciones_fotos where id_publicacion = {$row['id']} LIMIT 1";
		$r = $conexion->query($sqlFotos);
		while($fila = mysqli_fetch_array($r)){
			$foto = substr($fila[foto],3);
			echo "<div class=\"contAnuncio row\" id={$row['id']} style=\"box-shadow: -2px 5px 10px 10px #eeeeee;
		  border-radius: 25px;
		  margin:8px;
		  height: 185px;\">
			    <div class=\"col-md-3 anuncioPrincipal\"  >
			        <img src='{$foto}' alt='{$row['categoria']}{$row['tipo']}{$row['marca']}{$row['modelo']}' id=\"ftProdTarj\" style=\"height:100%;\">
			    </div>
			    <div class=\"col-md-9 anuncioPrincipal\">
			      <div class=\"row\" style=\" height:33.3%;\">
			        <div class=\"col-md-4\" style=\" height:100%;\">
			          <h4>{$row['titulo']}</h4>
			        </div>
			        <div id=\"precioTarj\" class=\"col-md-4 col-md-offset-4\" style=\" height:100%;\">
			          <h5>RD$ {$row['precio']}</h5>
			        </div>
			      </div>
			      <div class=\"row\" style=\" height:33.3%;\">
			        <div class=\"col-md-8\" style=\" height:100%;\">
			          <div class=\"col-md-6\" style=\" height:100%;\">
			            <h8><span class=\"glyphicon glyphicon-th-list\"></span> {$row['categoria']}/{$row['tipo']}</h8>
			          </div>
			          <div class=\"col-md-3\" style=\"height:100%;\">
			            <h8><span class=\"glyphicon glyphicon-user\"></span> {$row['user_usuario']}</h8>
			          </div>
			          <div class=\"col-md-3\" style=\" height:100%;\">
			            <h8><span class=\"glyphicon glyphicon-globe\"></span> {$row['region_usuario']}</h8>
			          </div>
			        </div>
			        <div class=\"col-md-4\" style=\" height:100%;\">
			        </div>
			      </div>
			      <div style=\" height:33.3%;\">
			        <div style=\"height:100%;\">
							{$row['descripcion']}
			      </div>
			      </div>
			    </div>
			  </div>
";
		}
	}

}

function viewpics($id,$conexion){
	//include_once("database.php");
	$sql2 = "SELECT publicaciones_fotos.id_publicacion as id, publicaciones_fotos.foto as  fotoProd, publicaciones_fotos.nombreFoto as nombreFoto FROM publicaciones_fotos WHERE publicaciones_fotos.id_publicacion = {$id}";


	$resultadoFotos = $conexion->query($sql2);

	$num =  mysqli_num_rows($resultadoFotos);


	echo "<ol class=\"carousel-indicators\">";
	for ($i=0; $i < $num; $i++) {
		echo "<li data-target=\"#myCarousel\" data-slide-to='{$i}' class=\"active\"></li>";
	}
	echo "</ol>";

	echo "<div class=\"carousel-inner\" role=\"listbox\">";
		$active = 1;
		while($row = mysqli_fetch_array($resultadoFotos)){
			$foto = "..".substr($row['fotoProd'],23);
			if($active == 1){
				echo "<div  class=\"item active\">";
				echo "<img style='width:50%; src=\"{$row['fotoProd']}\">";
				echo "</div>";
				$active = 0;
			}else{
				echo "<div class=\"item\">";
				echo "<img style='width:50%;' src=\"{$row['fotoProd']}\">";
				echo "</div>";
			}
		}
	echo "</div>";
	}


function viewProd(){
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
	$sql = "SELECT 	fotoAd FROM publicidad WHERE id = {$id}";
	$r = $conexion->query($sql);
	if($row = mysqli_fetch_array($r)){
		$fotoAd =  $row['fotoAd'];
		echo $fotoAd;
	}
}

?>
