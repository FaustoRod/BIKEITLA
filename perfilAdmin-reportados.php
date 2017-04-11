<!DOCTYPE html>
<html>
      <meta charset="utf-8">
      <title></title>
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

  <body>

    <div class="container-fluid" style="">
      <div class="col-md-10 col-md-offset-1" style="height:350px;">
        <div class="col-md-12 " style=" height:70%;">
          <div class="fotoPerAdmin" style="margin:auto; ">
            <img id="fotoAdmin" src="img/kk.jpg"  >
          </div>
          <div class="text-center" >
              <h5>Roniel Polanco</h5>
              <h8>@roniel06</h8>
          </div>
        </div>
      </div>
      <br>
      <div class="col-md-12" style="margin-top:10px; ">
        <div class="text-center">
          <h5>Anuncios Reportados</h5>
        </div>
        <div class="table-responsive" style="margin-top:30px;">
          <table class="table ">
            <thead>
              <tr>
                <th>id</th>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Eliminar</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Montanbai</td>
                <td><a href="#">@mena</a></td>
                <td><button type="button" id="btnElimPerf" class="btn btn-danger">Eliminar</button></td>
              </tr>

              <tr>
                <td>1</td>
                <td>Montanbai</td>
                <td><a href="#">@mena</a></td>
                <td><button type="button" id="btnElimPerf" class="btn btn-danger">Eliminar</button></td>
              </tr>

              <tr>
                <td>1</td>
                <td>Montanbai</td>
                <td><a href="#">@mena</a></td>
                <td><button type="button" id="btnElimPerf" class="btn btn-danger">Eliminar</button></td>
              </tr>

              <tr>
                <td>1</td>
                <td>Montanbai</td>
                <td><a href="#">@mena</a></td>
                <td><button type="button" id="btnElimPerf" class="btn btn-danger">Eliminar</button></td>
              </tr>

              <tr>
                <td>1</td>
                <td>Montanbai</td>
                <td><a href="#">@mena</a></td>
                <td><button type="button" id="btnElimPerf" class="btn btn-danger">Eliminar</button></td>
              </tr>

              <tr>
                <td>1</td>
                <td>Montanbai</td>
                <td><a href="#">@mena</a></td>
                <td><button type="button" id="btnElimPerf" class="btn btn-danger">Eliminar</button></td>
              </tr>


            </tbody>
          </table>
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
