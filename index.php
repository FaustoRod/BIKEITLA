<!DOCTYPE html>
<html>
      <meta charset="utf-8">
      <title>BikeItla</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">


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
      <script src="js/jquery-311.min.js"></script>
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
            <button type="button" class="btn btn-default btn-md" name="btnIniciar"> Ingresar </button>
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
  <div class="contGeneral animate-bottom container-fluid" id="contGeneral">
    <div class="col-md-2 contSubCateg">
      <div class="subContenido" >
        <ul id="tituloCategoria">
          <div>
            <h5><strong>Bicicletas</strong></h5>
          </div>
        </ul>

        <hr>
        <ul>
          <li><a href="#">Mountain Bike </a></li>
          <li><a href="#">BMX </a></li>
          <li><a href="#">Race Bikes</a></li>
          <li><a href="#">Monocicle</a></li>
        </ul>


        <ul id="tituloCategoria">
          <h5><strong>Repuestos</strong></h5>
        </ul>
        <hr>
        <ul>
          <li><a href="#" >Gomas </a></li>
          <li><a href="#" >Aros </a></li>
          <li><a href="#" >Frenos</a></li>
          <li><a href="#" >Timon </a></li>
          <li><a href="#" >Sillon</a></li>
        </ul>

        <ul id="tituloCategoria">
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
          <h5><strong>Regiones</strong></h5>
        </ul>
        <hr>
        <ul>
          <li><a href="#" >Cibao </a></li>
          <li><a href="#" >Este</a></li>
          <li><a href="#" >Sur</a></li>

        </ul>
      </div> <!--SubCategorias-->
      </div><!--Contenedor de las subcategorias-->



      <div class="col-md-7 " id="columnAnuncio"> <!--Contenedor de todos los anuncios-->
        <div class="contAnuncio row" id="contAnuncio">
          <div class="col-md-3 anuncioPrincipal" >
          </div>
          <div class="col-md-9 anuncioPrincipal">
            <div class="row" style="border:1px solid blue; height:33.3%;">
              <div class="col-md-4" style="border:1px solid green; height:100%;">
                Titulo
              </div>
              <div class="col-md-4 col-md-offset-4" style="border:1px solid purple; height:100%;">
                Precio
              </div>
            </div>
            <div class="row" style="border:1px solid blue; height:33.3%;">
              <div class="col-md-8" style="border:1px solid magenta; height:100%;">
                <div class="col-md-3" style="border:1px solid green; height:100%;">
                </div>
                <div class="col-md-3" style="border:1px solid green; height:100%;">
                </div>
                <div class="col-md-3" style="border:1px solid green; height:100%;">
                </div>
                <div class="col-md-3" style="border:1px solid green; height:100%;">
                </div>
              </div>
              <div class="col-md-4" style="border:1px solid yellow; height:100%;">
              </div>
            </div>
            <div class="" style="border:1px solid blue; height:33.3%;">
              <div class="" style="height:100%;">
            </div>
            </div>
          </div>
        </div>
    </div>

        <div class="col-md-3" style="background-color:transparent;height:690px;" id="contAds">
          <div class="" style="border:1px solid blue; width:80%;  height:40%; margin:auto; margin-bottom:10px;">
          </div>
          <div class="" style="border:1px solid blue; width:80%; height:60%; margin:auto;">
          </div>
        </div>

  </div>
</body>
<footer class="mdl-mini-footer">
  <div class="mdl-mini-footer__left-section">
    <div class="mdl-logo"></div>
    <ul class="mdl-mini-footer__link-list">
    </ul>
  </div>
</footer>
</html>
