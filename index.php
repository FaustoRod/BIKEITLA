<!DOCTYPE html>
<html>
      <meta charset="utf-8">
      <title></title>

      <meta property="og:url"                content="http://www.nytimes.com/2015/02/19/arts/international/when-great-minds-dont-think-alike.html" />
      <meta property="og:type"               content="article" />
      <meta property="og:title"              content="When Great Minds Don’t Think Alike" />
      <meta property="og:description"        content="How much does culture influence creative thinking?" />
      <meta property="og:image"              content="http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg" />
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

      <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">

        <!--Material Design Google -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">

       <link rel="stylesheet" href="css/style.css">
      <script src="js/script.js"></script>
      <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </head>

  <header>
    <nav class="navbar navbar-default">
      <div class="container-fluid">

        <div class="navbar-header">
          <a href="index.php" class="navbar-brand"><strong>Logo</strong></a>
        </div>

        <ul class="nav navbar-nav navbar-right">
          <li style="margin:10px;">
             <button type="button" class="btn btn-default" name="btnReg">Registrate</button>
          </li>

          <li style="margin:10px;">
            <button type="button" class="btn btn-default" name="btnIniciar"> Ingresar </button>
          </li>
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

          <ul class="nav navbar-nav">
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

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="#"> Ayuda</a></li>
            <li><a href="#">Nosotros</a></li>
          </ul> <!--Enlaces de la izquierda-->
        </div> <!--Contenedor de los elementos-->
      </div> <!--Contenedor de todo el NavBar-->
    </nav>  <!--Nav-->

</header>



<body onload="tiempo()">

<div class="loader" id="loader"> </div>

<div class="text-center" id="textCentroIndex" style="background-color: white; ">
  <h2>Productos de venta</h2>
</div>

<div class="row">

  <div class="contGeneral animate-bottom col-lg-12" id="contGeneral">

    <div class="col-md-2 contSubCateg">

      <div class="subContenido" >
        <ul>
          <h5><strong>Bicicletas</strong></h5>
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
      </div> <!--SubCategorias-->
      </div><!--Contenedor de las subcategorias-->



      <div class="col-md-10" id="columnAnuncio"> <!--Contenedor de todos los anuncios-->


          <div class="col-md-7" id="contAnuncio">
            <div class="col-md-2" id="imgAnuncio">
              <img class="image-responsive" src="img/perfil.jpg" alt="ft">
            </div>
            <div class="col-sm-4" id="tituloAnuncio">
              <h5><a href="#">Pareja de Venta</a></h5>
            </div>
            <div class="col-md-3">

            </div>
            <div class="col-sm-2" id="precioAnuncio">
              <h6>$5,000</h6>
            </div>

            <div class="row">
              <div class="col-md-9" id="detalleAnuncio">
                <p>Detalle del producto con to su vaina</p>
              </div>
            </div>
          </div>

          <div class="col-md-7" id="contAnuncio">
            <div class="col-md-2" id="imgAnuncio">
              <img class="image-responsive" src="img/perfil.jpg" alt="ft">
            </div>
            <div class="col-sm-4" id="tituloAnuncio">
              <h5><a href="#">Pareja de Venta</a></h5>
            </div>
            <div class="col-md-3">

            </div>
            <div class="col-sm-2" id="precioAnuncio">
              <h6>$5,000</h6>
            </div>

            <div class="row">
              <div class="col-md-9" id="detalleAnuncio">
                <p>Detalle del producto con to su vaina</p>
              </div>
            </div>
          </div>

          <div class="col-md-7" id="contAnuncio">
            <div class="col-md-2" id="imgAnuncio">
              <img class="image-responsive" src="img/perfil.jpg" alt="ft">
            </div>
            <div class="col-sm-4" id="tituloAnuncio">
              <h5><a href="#">Pareja de Venta</a></h5>
            </div>
            <div class="col-md-3">

            </div>
            <div class="col-sm-2" id="precioAnuncio">
              <h6>$5,000</h6>
            </div>

            <div class="row">
              <div class="col-md-9" id="detalleAnuncio">
                <p>Detalle del producto con to su vaina</p>
              </div>
            </div>
          </div>



        </div>


      </div>


  </div>



</div>
</body>
<?php

include_once("footer.php");

 ?>
