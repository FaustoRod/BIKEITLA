<?php

session_start();

include("../php/funciones.php");
include("../php/database.php");

$sqlf1 = "SELECT 	fotoAd FROM publicidad WHERE id = 1";
$r = $conexion->query($sqlf1);
if($row = mysqli_fetch_array($r)){
	$fotoAd =  $row['fotoAd'];
	$foto1 = $fotoAd;
}

$sqlf2 = "SELECT 	fotoAd FROM publicidad WHERE id = 2";
$r = $conexion->query($sqlf2);
if($row = mysqli_fetch_array($r)){
	$fotoAd =  $row['fotoAd'];
	$foto2 = $fotoAd;
}

$sqlf3 = "SELECT 	fotoAd FROM publicidad WHERE id = 3";
$r = $conexion->query($sqlf3);
if($row = mysqli_fetch_array($r)){
	$fotoAd =  $row['fotoAd'];
	$foto3 = $fotoAd;
};


 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Admin Panel</title>
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
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

   <link rel="stylesheet" href="../css/style.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>
  <body>
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
  <div style="width:100%;height:250px;" class="anuncio">  <!--Anuncios(Ads!)-->
    <img style="width:100%;height:100%" src="<?php  echo $foto1;?>"/>
  </div>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class="nav navbar-nav  barraNav">
            <li><a href="../index.php">Inicio</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href=# >Categorias
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Bicicletas</a></li>
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
  <section>

    <div style="display:inline">
      <div style="width:300px;height:300px;border:1px solid red;margin:2px;">
        <img style="width:100%;height:100%;" id="ad1" src="<?php echo $foto1; ?>"/>


      </div>
      <button id="1" onclick="editAd()">editar</button>
      <div style="width:300px;height:300px;border:1px solid red;margin:2px;">
        <img style="width:100%;height:100%;"id="ad2" src="<?php echo $foto2; ?>"/>

      </div>
      <button id="2" onclick="editAd()">editar</button>
      <div style="width:300px;height:300px;border:1px solid red;margin:2px;">
        <img style="width:100%;height:100%;" id="ad1" src="<?php echo $foto3; ?>"/>

      </div>
      <button id="3" onclick="editAd()">editar</button>
      <div id="editDiv">


      </div>
    </div>
    <script>

      function editAd(){
        var id = event.target.id;
        $.post("../php/editPicPage.php",
        {
          id:id
        },function(data){
          $("#editDiv").html(data);
        });

      }

    </script>

  </section>
  <footer class="mdl-mini-footer" style="bottom:0px;position:relative; width:100%;">
    <div class="mdl-mini-footer__left-section">
      <div class="mdl-logo"></div>
      <ul class="mdl-mini-footer__link-list">
      </ul>
    </div>
  </footer>
  </body>

</html>
