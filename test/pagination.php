<?php
include("database.php");
$tipo = $_GET['tipo'];
if(empty($tipo)){$sql ="select * FROM publicaciones INNER JOIN usuario on
publicaciones.id_user= usuario.id";
}else{
	$sql ="select * from publicaciones where categoria = '{$tipo}'";
}
echo $sql;
$resultado = $conexion->query($sql);
$total = $resultado->num_rows;
$adjacents = 3;
$targetpage = "pagination.php"; //your file name
$limit = 3; //how many items to show per page
$page = $_GET['page'];
if($page > 0){
$start = ($page - 1) * $limit; //first item to display on this page
}else{
$start = 0;
}

/* Setup page vars for display. */
if ($page == 0) $page = 1; //if no page var is given, default to 1.
$prev = $page - 1; //previous page is current page - 1
$next = $page + 1; //next page is current page + 1
$lastpage = ceil($total/$limit); //lastpage.
$lpm1 = $lastpage - 1; //last page minus 1
if(empty($tipo)){

$sql2 = "SELECT usuario.nombre as nombre_usuario,usuario.apellido AS
apellido_usuario,usuario.usuario AS user_usuario,usuario.email
AS email_usuario,usuario.region AS region_usuario,usuario.provincia
AS provincia_usuario, usuario.municipio as usuario_municipio,usuario.telefono1 as usuario_telefono,
usuario.telefono2 as usuario_telefono2, publicaciones.id AS id ,publicaciones.titulo as titulo, publicaciones.categoria as categoria,
publicaciones.tipo as tipo,publicaciones.marca as marca,publicaciones.modelo as modelo,
publicaciones.precio AS precio, publicaciones.descripcion as descripcion FROM publicaciones INNER JOIN usuario on
publicaciones.id_user= usuario.id";
$sql2 .= " order by id_post  limit $start ,$limit ";
}else{
	$sql2 = "select * from testpost where categoria = '{$tipo}'";
	$sql2 .= " order by id_post  limit $start ,$limit ";
}

$sql_query = $conexion->query($sql2);


/* CREATE THE PAGINATION */

$pagination = "";
if($lastpage > 1)
{
$pagination .= "<div class='pagination1'> <ul>";
if ($page > $counter+1) {
	if(empty($tipo)){
$pagination.= "<li><a href=\"$targetpage?page=$prev\">prev</a></li>";
}else{
	$pagination.= "<li><a href=\"$targetpage?page=$prev&tipo={$tipo}\">prev</a></li>";
}
};

if ($lastpage < 7 + ($adjacents * 2))
{
for ($counter = 1; $counter <= $lastpage; $counter++)
{
if ($counter == $page)
$pagination.= "<li><a href='#' class='active'>$counter</a></li>";
else if(empty($tipo)){
$pagination.= "<li><a href=\"$targetpage?page=$counter\">$counter</a></li>";
}else{
	$pagination.= "<li><a href=\"$targetpage?page=$counter&tipo={$tipo}\">$counter</a></li>";
}
}
}
elseif($lastpage > 5 + ($adjacents * 2)) //enough pages to hide some
{
//close to beginning; only hide later pages
if($page < 1 + ($adjacents * 2))
{
for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
{
if ($counter == $page)
$pagination.= "<li><a href='#' class='active'>$counter</a></li>";
else if(empty($tipo)){
$pagination.= "<li><a href=\"$targetpage?page=$counter\">$counter</a></li>";
}else{
	$pagination.= "<li><a href=\"$targetpage?page=$counter&tipo={$tipo}\">$counter</a></li>";
}
}
if(empty($tipo)){
$pagination.= "<li>...</li>";
$pagination.= "<li><a href=\"$targetpage?page=$lpm1\">$lpm1</a></li>";
$pagination.= "<li><a href=\"$targetpage?page=$lastpage\">$lastpage</a></li>";
}else{
	$pagination.= "<li>...</li>";
	$pagination.= "<li><a href=\"$targetpage?page=$lpm1&tipo={$tipo}\">$lpm1</a></li>";
	$pagination.= "<li><a href=\"$targetpage?page=$lastpage&tipo={$tipo}\">$lastpage</a></li>";
}
}
//in middle; hide some front and some back
elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
{
	if(empty($tipo)){
$pagination.= "<li><a href=\"$targetpage?page=1\">1</a></li>";
$pagination.= "<li><a href=\"$targetpage?page=2\">2</a></li>";
$pagination.= "<li>...</li>";
for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
{
if ($counter == $page)
$pagination.= "<li><a href='#' class='active'>$counter</a></li>";
else
$pagination.= "<li><a href=\"$targetpage?page=$counter\">$counter</a></li>";
}
$pagination.= "<li>...</li>";
$pagination.= "<li><a href=\"$targetpage?page=$lpm1\">$lpm1</a></li>";
$pagination.= "<li><a href=\"$targetpage?page=$lastpage\">$lastpage</a></li>";
}else{
	$pagination.= "<li><a href=\"$targetpage?page=1&tipo={$tipo}\">1</a></li>";
	$pagination.= "<li><a href=\"$targetpage?page=2&tipo={$tipo}\">2</a></li>";
	$pagination.= "<li>...</li>";
	for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
	{
	if ($counter == $page)
	$pagination.= "<li><a href='#' class='active'>$counter</a></li>";
	else
	$pagination.= "<li><a href=\"$targetpage?page=$counter&tipo={$tipo}\">$counter</a></li>";
	}
	$pagination.= "<li>...</li>";
	$pagination.= "<li><a href=\"$targetpage?page=$lpm1&tipo={$tipo}\">$lpm1</a></li>";
	$pagination.= "<li><a href=\"$targetpage?page=$lastpage&tipo={$tipo}\">$lastpage</a></li>";
}
}
//close to end; only hide early pages
else
{
	if(empty($tipo)){
$pagination.= "<li><a href=\"$targetpage?page=1\">1</a></li>";
$pagination.= "<li><a href=\"$targetpage?page=2\">2</a></li>";
$pagination.= "<li>...</li>";
for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage;
$counter++)
{
if ($counter == $page)
$pagination.= "<li><a href='#' class='active'>$counter</a></li>";
else
$pagination.= "<li><a href=\"$targetpage?page=$counter\">$counter</a></li>";
}
}else{
	$pagination.= "<li><a href=\"$targetpage?page=1&tipo={$tipo}\">1</a></li>";
	$pagination.= "<li><a href=\"$targetpage?page=2&tipo={$tipo}\">2</a></li>";
	$pagination.= "<li>...</li>";
	for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage;
	$counter++)
	{
	if ($counter == $page)
	$pagination.= "<li><a href='#' class='active'>$counter</a></li>";
	else
	$pagination.= "<li><a href=\"$targetpage?page=$counter&tipo={$tipo}\">$counter</a></li>";
	}
}
}
}

//next button
if ($page < $counter - 1)
if(empty($tipo)){
$pagination.= "<li><a href=\"$targetpage?page=$next\">next</a></li>";
}else{
	$pagination.= "<li><a href=\"$targetpage?page=$next&tipo={$tipo}\">next</a></li>";
}
else
$pagination.= "";
$pagination.= "</ul></div>\n";
}


?>

<?php

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
						<img src='{$foto}' alt='{$row['categoria']}{$row['tipo']}{w$row['marca']}{$row['modelo']}' id=\"ftProdTarj\" style=\"height:100%;\">
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
						in		<h8><span class=\"glyphicon glyphicon-globe\"></span> {$row['region_usuario']}</h8>
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

echo $pagination;
?>
<script>
function sortProd(){
  var tipo = event.target.id;
  window.location = "pagination.php?tipo="+tipo+"&page=1";
}

</script>
