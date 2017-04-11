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
            <button type="button" class="btn btn-default" name="btnIniciar"><span class="glyphicon glyphicon-log-in"></span> Ingresar </button>
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

<script type="text/javascript">
$('document').ready(function(){
  $('#min_precio').change(function(){
    var precio= $(this).val()
    $('#rango_precio').text("Precio:$"+precio)
  });
});

$.ajax({
  url: , //Aqui La url donde se solicitara el post
  method:"POST",
  data:{precio:precio},
  success: function(data){
    $(/*Aqui la clase o id recarga los productos en este caso  .columnAnuncio*/).fadeIn(500).html(data);
  }
})

</script>


  <div class="col-md-7 " id="columnAnuncio"> <!--Contenedor de todos los anuncios-->

      <div class="contAnuncio row" id="contAnuncio">

          <div class="col-md-3 anuncioPrincipal"  >
              <img src="img/kk.jpg" alt="ft" id="ftProdTarj">
          </div>

          <div class="col-md-9 anuncioPrincipal">
            <div class="row" style=" height:33.3%;">

              <div class="col-md-4" style=" height:100%;">
                <h5>Bicicleta Aro 20</h5>
              </div>

              <div id="precioTarj" class="col-md-4 col-md-offset-4" style=" height:100%;">
                <h5>$6,500</h5>
              </div>
            </div>

            <div class="row" style=" height:33.3%;">
              <div class="col-md-8" style=" height:100%;">
                <div class="col-md-4" style=" height:100%;">
                  <h8><span class="glyphicon glyphicon-road"></span> BMX</h8>
                </div>

                <div class="col-md-4" style="height:100%;">
                  <h8><span class="glyphicon glyphicon-user"></span> roniel06</h8>
                </div>



                <div class="col-md-3" style=" height:100%;">
                  Hora
                </div>

              </div>

              <div class="col-md-4" style=" height:100%;">

              </div>
            </div>

            <div class="" style=" height:33.3%;">
              <div class="" style="height:100%;">
                Detalle del producto con to la vaina
            </div>
            </div>
          </div>
        </div>










        </div>










        <div class="col-md-3" style="background-color:transparent;" id="contAds">

          <div class="" style="border:1px solid blue; width:80%;  height:300px; margin:auto; margin-bottom:10px;">

          </div>

          <div class="" style="border:1px solid blue; width:80%; height:455px; margin:auto;">

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
