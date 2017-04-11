<!DOCTYPE html>
<html >
  <head>
      <meta charset="utf-8">
      <title></title>
      <script src="js/script.js"></script>

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
      <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>


      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">

      <!-- Latest compiled and minified JavaScript -->
      <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
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

        <nav class="navbar navbar-default"  style="margin-bottom:1px;">
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

<body>

<div class="container" id="containerFormProd">
  <div class="text-center" id="infoForm">
    <h4>Formulario de entrada de producto</h4>
  </div>

<div class="formUpload">

  <form action="#" method="post" enctype="multipart/form-data" id="formUpload">
    <div class="form-group">
      <label for="Titulo">Titulo:</label>
      <input autofocus type="text" name="tituloProd" id="tituloProd" class="form-control" placeholder="Ingrese El Titulo" required>
    </div>

    <div class="form-group">
      <label for="tipo">Tipo:</label>
      <select class="form-control" name="selectTipo">
        <option value="0">Bicicleta</option>
        <option value="1">Accesorio</option>
        <option value="2">Repuesto</option>
      </select>
    </div>

    <div class="form-group">
      <label for="tipo">Categoria:</label>
      <select class="form-control" name="selectCategoria" required>
        <option value="0">BMX</option>
        <option value="1">Carretera</option>
        <option value="2">Montaña</option>
        <option value="3">Harley</option>
        <option value="4">Hibrida o Urbana</option>
        <option value="5">Velocidad</option>
        <option value="6">Playera</option>
        <option value="7">Infantil</option>
        <option value="8">Reclinada</option>
      </select>
    </div>

    <div class="form-group">
      <label for="marca">Marca:</label>
      <input type="text" name="marcaProd" class="form-control" placeholder="Ingrese La Marca" required>
    </div>

    <div class="form-group">
      <label for="precio">Precio:</label>
      <input type="text"  name="precioProd" class="form-control" placeholder="Ingrese El Precio" required>
    </div>
    <div class="form-group" id="contDetProd">
      <label for="detalles">Detalles del producto:</label>
      <textarea name="detalleProd" rows="4" cols="48" placeholder="Ingrese Aqui El Detalle del Producto" required></textarea>
    </div>
    <div class="form-group">
      <label for="subida">Suba la imagen:</label>
      <input type="file" name="imgProd" required>

    </div>
    <div class="form-group">
      <button class="btn btn-warning" id="btnAddColumn">Agregar otra imagen </button>
    </div>

    <div class="form-group">
      <button type="submit" name="btnEnvFormProd" class="btn btn-default">Publicar</button>
    </div>
  </form>

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
