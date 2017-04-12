<?php

session_start();

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
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

     <link rel="stylesheet" href="../css/style.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </head>
  <header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand"><strong>Logo<?php echo $_SESSION['id_post'];?></strong></a>
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

  <body>
    <div class="container" id="containerFormProd" style="margin-top:3%;font-family:'Roboto', sans-serif;">
      <div class="formFotosUpload">
        <div class="col-md-offset-2 col-md-8 col-md-offset-2" style="text-align:center;">
          <h2>Inserte Imagenes</h2>
        </div>
        <div id="formFotosCont"  class="col-md-offset-2 col-md-8 col-md-offset-2">
          <button id="btn-add-input" class="btn btn-default">Agregar Imagen</button>

          <form class="form-inline"  method="post" action="../php/loadpic.php" enctype="multipart/form-data">
            <input type="text" style="visibility:hidden;" name="id_post_para_foto" value=<?php echo $_SESSION['id_post'];?>>
            <div class="row" id="foto1" style="margin-top:20px;">
              <div class="col-md-4">
                <div class="form-group" >
                  <label for="foto">Foto #1</label>
                  <input type="file" class="form-control" name="foto[]" accept='image/x-png, image/gif, image/jpeg'>
                </div>
              </div>
            </div>

            <div class="row" id="foto2" style="margin-top:20px;visibility:hidden;">
              <div class="col-md-4">
                <div class="form-group" >
                  <label for="foto">Foto #2</label>
                  <input type="file" class="form-control" name="foto[]" accept='image/x-png, image/gif, image/jpeg'>
                </div>
              </div>
            </div>

            <div class="row" id="foto3" style="margin-top:20px;visibility:hidden;">
              <div class="col-md-4">
                <div class="form-group" >
                  <label for="foto">Foto #3</label>
                  <input type="file" class="form-control" name="foto[]" accept='image/x-png, image/gif, image/jpeg'>
                </div>
              </div>
            </div>

            <div class="row" id="foto4" style="margin-top:20px;visibility:hidden;">
              <div class="col-md-4">
                <div class="form-group" >
                  <label for="foto">Foto #4</label>
                  <input type="file" class="form-control" name="foto[]" accept='image/x-png, image/gif, image/jpeg'>
                </div>
              </div>
            </div>

            <div class="row" id="foto5" style="margin-top:20px;margin-bottom:10px;visibility:hidden;">
              <div class="col-md-4">
                <div class="form-group" >
                  <label for="foto">Foto #5</label>
                  <input type="file" class="form-control" name="foto[]" accept='image/x-png, image/gif, image/jpeg'>
                </div>
              </div>
            </div>

            <button class="btn btn-default" type="submit" style="margin-bottom:20px;">Subir Fotos</button>
          </form>
        </div>

      </div>
    </div>

    <footer class="mdl-mini-footer" style="position: absolute; right: 0;bottom: 0;left: 0; width:100%;">
      <div class="mdl-mini-footer__left-section">
        <div class="mdl-logo"></div>
        <ul class="mdl-mini-footer__link-list">
        </ul>
      </div>
    </footer>
    <script>
    var x = 1;
    $("#btn-add-input").click(function(){
        if(x < 5){
          x++;
          var inputName = "foto" + x.toString();
          $("#foto" + x.toString()).css("visibility","visible");
        }
    });
    </script>
  </body>
</html>
