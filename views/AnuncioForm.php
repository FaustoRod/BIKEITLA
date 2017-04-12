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
    <div class="container" id="containerFormProd" style="margin-top:-5px;font-family:'Roboto', sans-serif;">
      <div class="text-center" id="infoForm">
        <h4>Que quieres vender?</h4>
      </div>

    <div class="formUpload">

      <form action="../php/registroPublicacion.php" method="post" id="formUpload">
        <div style="display:none;">
          <input type="text" name="id_user" value="<?php echo $_SESSION['id_user']?>"/>
        </div>
        <div class="form-group">
          <label for="titulo">Titulo:</label>
          <input maxlength="30" autofocus type="text" name="titulo" id="tituloProd" class="form-control" placeholder="Ingrese El Titulo" required>
        </div>

        <div class="row" style="margin-bottom:10px;">
          <div class="col-md-6">
              <label for="categoria">Categoria:</label>
              <select class="form-control" id= "selectCategoria" name="categoria">
                <option value="Bicicleta">Bicicleta</option>
                <option value="Accesorio">Accesorio</option>
                <option value="Repuestos">Repuestos</option>
              </select>
            </div>

          <div class="col-md-6">
              <label for="tipo">Tipo:</label>
              <select class="form-control" id="selectTipo" name="tipo">
                <option value="BMX">BMX</option>
                <option value="Carretera">Carretera</option>
                <option value="Montaña">Montaña</option>
                <option value="Harley">Harley</option>
                <option value="Hibrida">Hibrida</option>
                <option value="Velocidad">Velocidad</option>
                <option value="Playera">Playera</option>
                <option value="Infantil">Infantil</option>
                <option value="Reclinada">Reclinada</option>
              </select>
            </div>
        </div>

        <div class="row" style="margin-bottom:10px;">
          <div class="col-md-6">
            <label for="marca">Marca:</label>
            <input maxlength="15" type="text" name="marca" class="form-control" placeholder="Ingrese La Marca" required>
          </div>
          <div class="col-md-6">
            <label for="modelo">Modelo:</label>
            <input maxlength="15" type="text" name="modelo" class="form-control" placeholder="Ingrese La Marca">
          </div>
        </div>

        <div class="form-group">
          <label for="precio">Precio:</label>
          <input maxlength="10" type="text" name="precio" class="form-control" placeholder="Ingrese El Precio" required>
        </div>
        <div class="form-group" id="contDetProd">
          <label for="descripcion">Detalles del producto:</label>
          <textarea name="descripcion" rows="4" cols="48" placeholder="Ingrese Aqui El Detalle del Producto" required></textarea>
        </div>

        <div class="form-group">
          <button type="submit" name="btnEnvFormProd" class="btn btn-default">Publicar</button>
        </div>
      </form>

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
      $("#selectCategoria").change(function(){
        var cat = $(this).val();

        switch (cat) {
          case "Accesorio":
            $("#selectTipo").html(
              "<option value='Reflectores'>Reflectores</option>"+
              "<option value='Luces'>Luces</option>"+
              "<option value='Casco'>Casco</option>"+
              "<option value='Mochila'>Mochila</option>"+
              "<option value='Ropa'>Ropa</option>"+
              "<option value='Lentes'>Lentes</option>"+
              "<option value='Inflador'>Inflador</option>"+
              "<option value='Puños'>Puños</option>"
            );
          break;


          case "Bicicleta":
            $("#selectTipo").html(
              "<option value='BMX'>BMX</option>"+
              "<option value='Carretera'>Carretera</option>"+
              "<option value='Montaña'>Montaña</option>"+
              "<option value='Harley'>Harley</option>"+
              "<option value='Hibrida'>Hibrida</option>"+
              "<option value='Velocidad'>Velocidad</option>"+
              "<option value='Playera'>Playera</option>"+
              "<option value='Infantil'>Infantil</option>"+
              "<option value='Reclinada'>Reclinada</option>"
            );
          break;


          case "Repuestos":
            $("#selectTipo").html(
              "<option value='Gomas'>Gomas</option>"+
              "<option value='Amortiguadores'>Amortiguadores</option>"+
              "<option value='Aros'>Aros</option>"+
              "<option value='Rayos'>Rayos</option>"+
              "<option value='Frenos'>Frenos</option>"+
              "<option value='Pedales'>Pedales</option>"+
              "<option value='Gomas'>Gomas</option>"
            );
            break;
          default:

        }
      });
    </script>
  </body>
</html>
