<?php

session_start();

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
              <div style='font-size:25px;margin-top:5px;'>Bienvenido <a style='font-size:25px;' href=''>{$_SESSION['user']}</a></div>
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
        include("php/funciones.php");
        viewall();

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
</body>
</html>
