<?php
session_start();

include("../php/funciones.php");
include("../php/database.php");
$id=$_GET['id'];
$sql = "SELECT usuario.nombre as nombre_usuario,usuario.apellido AS
apellido_usuario,usuario.usuario AS user_usuario,usuario.email
AS email_usuario,usuario.region AS region_usuario,usuario.provincia
AS provincia_usuario, usuario.municipio as usuario_municipio,usuario.telefono1 as usuario_telefono,
usuario.telefono2 as usuario_telefono2, usuario.foto as foto, publicaciones.id AS id ,publicaciones.titulo as titulo, publicaciones.categoria as categoria,
publicaciones.tipo as tipo,publicaciones.marca as marca,publicaciones.modelo as modelo,
publicaciones.precio AS precio, publicaciones.descripcion as descripcion FROM publicaciones INNER JOIN usuario on
publicaciones.id_user= usuario.id WHERE publicaciones.id = {$id}";

$resultado  = $conexion->query($sql);

if($row = mysqli_fetch_array($resultado)){
  $id = $row['id'];
  $nombre = $row['nombre_usuario'];
  $apellido=$row['apellido_usuario'];
  $usuario = $row['user_usuario'];
  $email = $row['email_usuario'];
  $region = $row['region_usuario'];
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
  $foto = $row['foto'];



}

$sqlFotos = "SELECT "
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="../js/jquery-311.min.js"></script>
    <script src="../js/script.js"></script>
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

     <link rel="stylesheet" href="../css/style.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </head>

  <header>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand"><strong>Logo</strong></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
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
            <li><a href="../index.php">Inicio</a></li>
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

<body>
  <div id="fb-root"></div>
  	<script>
	(function(d, s, id) {
   	 var js, fjs = d.getElementsByTagName(s)[0];
    	if (d.getElementById(id)) return;
    	js = d.createElement(s); js.id = id;
    	js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=293007237804840";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

</script>
  <div class="contPagProd">

    <div class="contProd">
      <div class="producto img-responsive" >
        <div class="carousel slide" id="myCarousel" data-ride="carousel">
          <?php
            viewpics($id,$conexion);
           ?>
        </div>
      </div>


        <div class="detalleProd row">
          <h3 style="margin-left:10px;">Detalles:</h3>
          <div style="margin-left:10px;">
            <h5>Marca: <?php echo $marca;?></h5>
          </div>
          <div style="margin-left:10px;">
            <h5>Modelo: <?php echo $modelo;?></h5>
          </div>
          <div style="margin-left:10px;">
            <h5><strong>Descripcion:</strong></h5>
            <h6> <?php echo $descripcion;?></h6>
          </div>
        </div>


      <div class="conmpartirProd">
        <div class="text-center" id="infCompartir" style="width:100%; height:auto; border-radius:15px;">
          <h6>Compartir este producto </h6>
        </div>
        <div class="iconoSocial" id="fb">
         <div id="btnShare" class="fb-share-button" data-href="" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fprodstore.000webhostapp.com%2F&amp;src=sdkpreparse">Compartir</a></div>
        </div>


      </div>

    </div>


    <div class="contPrecioVendedor">
      <div class="detallePrecio">
        <div class="text-center"> <!--Container Precio y nombre prod-->
          <h3><strong> RD$ <?php echo $precio;?> </strong></h3><!--Aqui El Precio-->
        </div>

        <div class="text-center">
          <h4><strong><?php echo $titulo; ?></strong></h4> <!--Aqui El Nombre-->
        </div>
        <hr>

        <div class="btnContactar">
          <button class="btn btn-danger">Contactar al vendedor </button>
        </div>

      </div>

      <div class="acercaVend">
        <h6>Acerca del vendedor</h6>
        <hr>
      </div>

      <div class="detalleVendedor"><!--Aqui El Detalle del perfil del vendedor-->

        <div class="contFotoPerfil"><!--Aqui el contenedor de la imagen del vendedor-->
          <img src="<?php echo "..".substr($foto,23);?>" alt="imgPerfil">
        </div>

        <div class="text-center">
          <h4><strong><?php  echo $nombre." ".$apellido;?></strong></h4> <!--Aqui El Nombre del vendedor-->
          <div style="font-size:20px;">
            <span>Direccion:</span>
            <span class="glyphicon glyphicon-map-marker"></span><?php echo $provincia.", ".$municipio;?>
          </div><br />
          <div style="font-size:20px;">
            <span>e-mail:</span>
            <span class="glyphicon glyphicon-envelope"></span><?php echo " ".$email;?>
          </div><br />
          <div style="font-size:20px;">
            <span>Telefono:</span>
            <span class="	glyphicon glyphicon-phone"></span><?php echo " ".$telefono;?>
          </div><br />
        </div>
      </div> <!--detalleVendedor-->


    </div> <!--contPrecioVendedor-->




    </div>
    <script>
        var url= window.location.href;
        $('#btnShare').attr('data-href',url);
      </script>
</body>
<footer class="mdl-mini-footer" style="bottom:0px;position:relative; width:100%;">
  <div class="mdl-mini-footer__left-section">
    <div class="mdl-logo"></div>
    <ul class="mdl-mini-footer__link-list">
    </ul>
  </div>

</footer>
</html>
