<?php
session_start();

include("php/database.php");
$tipo = $_GET['tipo'];
if(empty($tipo))
{$sql ="SELECT * FROM publicaciones ";
}else{
	$sql ="SELECT * FROM publicaciones= '{$tipo}'";
}

$resultado = $conexion->query($sql);
$total = $resultado->num_rows;
$adjacents = 3;
$targetpage = "index.php"; //your file name
$limit = 4; //how many items to show per page
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
$sql2 .= " order by id limit $start ,$limit ";
}else{
	$sql2 = "select * from publicaciones where categoria = '{$tipo}'";
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
<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <title></title>
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <script src="js/jquery-311.min.js"></script>
      <script src="js/script.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

      <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


        <!--Material Design Google -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">

       <link rel="stylesheet" href="css/style.css">
      <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    </head>

  <header>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand"><strong>Logo</strong></a>
        </div>
        <ul class="nav navbar-nav navbar-right"><?php

          if(empty($_SESSION['user'])){
            echo "
            <li style='margin:10px;'>
              <button type='button' data-toggle='modal' data-target='#login-modal' class='btn btn-default' name='btnIniciar'><span class='glyphicon glyphicon-log-in'></span> Ingresar </button>
            </li>
            ";
          }else{
            echo "<li style='margin:10px;'>
              <div style='font-size:25px;margin-top:5px;'>Bienvenido <a href='php/sendPerfilUsuario.php?tipo={$_SESSION['tipo']}&id={$_SESSION['id_user']}' style='font-size:25px;'>{$_SESSION['user']}</a></div>
            </li>
            <li style='margin:10px;'>
              <button id='btn-logout' onclick=logout() style='background-color:transparent;border:1px solid blue; box-shadow: 0px 2px 2px rgba(0,0,0,0.5);' class='btn'>Cerrar Session</button>
            </li>
            ";
          }

          ?>
          <li>
            <form class="navbar-form" role="search">
            <div class="input-group add-on">
              <input class="form-control" placeholder="Buscar" name="campoBuscar" id="campoBuscar" type="text">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
              </div>
            </div>
            </form>
          </li>
        </ul> <!--Enlaces de la izquierda-->
      </div> <!--Contenedor de los elementos-->
    </div> <!--Contenedor de todo el NavBar-->
  </nav>  <!--Nav-->
      <div class="">  <!--Anuncios(Ads!)-->

      </div>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class="nav navbar-nav  barraNav">
            <li><a href="index.php">Inicio</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href=# >Categorias
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Bicicletas</li>
                <li><a href="#">Repuestos</a></li>
                <li><a href="#">Accesorios</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right barraNav">
            <li><a href="php/redirectPostForm.php">Publicar</a></li>
            <li><a href="#" class="#"> Ayuda</a></li>
            <li><a href="#">Nosotros</a></li>
          </ul> <!--Enlaces de la izquierda-->
        </div> <!--Contenedor de los elementos-->
      </div> <!--Contenedor de todo el NavBar-->
    </nav>  <!--Nav-->
</header>

<body onload="tiempo()">
  <div class="loader" id="loader"> </div>
  <div class="contGeneral animate-bottom container-fluid" id="contGeneral">
    <div class="col-md-2 contSubCateg">
      <div class="subContenido" >
        <ul>
          <h5 id="prueba"><strong>Bicicletas</strong></h5>
        </ul>
        <hr>
        <ul>
          <li><a href="#" >Mountain Bike </a></li>
          <li><a href="#" >BMX </a></li>
          <li><a href="#" >Race Bikes</a></li>
          <li><a href="#" >Monocicle</a></li>
        </ul>
        <ul>
          <h5><strong>Repuestos</strong></h5>
        </ul>
        <hr>
        <ul>
          <li><a href="#" >Gomas </a></li>
          <li><a href="#" >Aros </a></li>
          <li><a href="#" >Rayos</a></li>
          <li><a href="#" >Frenos</a></li>
          <li><a href="#" >Selector de cambios </a></li>
          <li><a href="#" >Timon </a></li>
          <li><a href="#" >Sillon</a></li>
          <li><a href="#" >Chasis</a></li>
        </ul>
        <ul>
          <h5><strong>Accesorios</strong></h5>
        </ul>
        <hr>
        <ul>
          <li><a href="#" >Dynamo </a></li>
          <li><a href="#" >Luces </a></li>
          <li><a href="#" >Calcomanias</a></li>
          <li><a href="#" >Reflectores</a></li>
        </ul>
        <ul>
          <h5><strong>Provincias</strong></h5>
        </ul>
        <hr>
        <ul>
          <li><a href="#" >Norte Cibao </a></li>
          <li><a href="#" >Sureste </a></li>
          <li><a href="#" >Suroeste</a></li>
        </ul>
        <ul>
          <h5><strong>Rango de precio</strong></h5>
        </ul>
        <hr>
        <!-- Slider with Starting Value -->
      <input id="min_precio" class="rango" name="rango_precio" type="range"
        min="100" step="100" max="150000" value="100" tabindex="0">
        <span id="rango_precio"></span>
      </div> <!--SubCategorias-->
  </div><!--Contenedor de las subcategorias-->

  <div class="col-md-7 " id="columnAnuncio"> <!--Contenedor de todos los anuncios-->

    <?php


    while ($row = mysqli_fetch_array($sql_query)){
      $sqlFotos = "Select foto FROM publicaciones_fotos where id_publicacion = {$row['id']} LIMIT 1";
      $r = $conexion->query($sqlFotos);
      while($fila = mysqli_fetch_array($r)){
        $foto = substr($fila[foto],3);
        echo "<div class=\"contAnuncio row\" id={$row['id']} style=\"box-shadow: -2px 5px 10px 10px #eeeeee; border-radius: 25px; margin:8px; height: 185px;\">
            <div class=\"col-md-3 anuncioPrincipal\">
                <img src='{$foto}' alt='{$row['categoria']}{$row['tipo']}{$row['marca']}{$row['modelo']}' id=\"ftProdTarj\" style=\"height:100%;\">
            </div>
            <div class=\"col-md-9 anuncioPrincipal\">
              <div class=\"row\" style=\" height:33.3%;\">
                <div class=\"col-md-4\" style=\" height:100%;\">
                  <button id='{$row['id']}' class=\"btn btn-link\" onclick=\"getProd(this.id)\"><h4>{$row['titulo']}</h4></button>
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
          </div>  ";
      }
    }

    echo $pagination;
    ?>

</div>

<div class="col-md-3" style="background-color:transparent;height:730px;" id="contAds">
  <div class="" style="border:1px solid blue; width:80%;  height:30%; margin:auto; margin-bottom:10px;">
    </div>
      <div class="" style="border:1px solid blue; width:80%; height:70%; margin:auto;">
      </div>
</div>
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
    <div class="loginmodal-container">
      <h1>Iniciar Sesion</h1><br>
      <form method="post" action="php/login.php">
      <input type="text" name="user" placeholder="Usuario">
      <input type="password" name="pass" placeholder="Contraseña">
      <input type="submit" name="login" class="login loginmodal-submit" value="Login">
      </form>

      <div class="login-help">
      <a href="views/RegistroForm.html">Registrarse</a>
      </div>
    </div>
  </div>
  </div>
  </div>

  </div>
<footer class="mdl-mini-footer" style="bottom:0px;position:relative; width:100%;">
  <div class="mdl-mini-footer__left-section">
    <div class="mdl-logo"></div>
    <ul class="mdl-mini-footer__link-list">
    </ul>
  </div>

</footer>
<script>
function sortProd(){
  var tipo = event.target.id;
  window.location = "pagination.php?tipo="+tipo+"&page=1";
}

</script>
