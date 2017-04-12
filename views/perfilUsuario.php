<?php

session_start();
$idU = $_GET['id'];
include("../php/funciones.php");
include("../php/database.php");
$sql = "SELECT usuario.nombre as nombre_usuario,usuario.apellido AS
apellido_usuario,usuario.usuario AS user_usuario,usuario.email
AS email_usuario,usuario.region AS region_usuario,usuario.provincia
AS provincia_usuario, usuario.municipio as usuario_municipio,usuario.telefono1 as usuario_telefono,
usuario.telefono2 as usuario_telefono2, usuario.foto as foto, publicaciones.id AS id ,publicaciones.titulo as titulo, publicaciones.categoria as categoria,
publicaciones.tipo as tipo,publicaciones.marca as marca,publicaciones.modelo as modelo,
publicaciones.precio AS precio, publicaciones.descripcion as descripcion FROM publicaciones INNER JOIN usuario on
publicaciones.id_user= usuario.id WHERE usuario.id = $idU";
$resultado = $conexion->query($sql);

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
  $foto = "..".substr($row['foto'],23);

}

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

  <div class="contPagPerfil">

    <div class="container-fluid " style="height:250px">
      <div class="row" >

        <div class="col-md-6 col-md-offset-3" >
            <div class="col-md-4 col-md-offset-4"  style=" background-color:inherit;">
              <img src="<?php echo $foto;?>" alt="perfil" style="display:block; margin:auto; background-color:inherit; width:150px; height:150px; border-radius:90px;">
          </div>
        </div>
      </div>

      <div class="text-center" style=" background-color:inherit;">
        <h2>@<?php echo $usuario; ?></h2>
        <h2>Nombre: <?php echo $nombre." ".$apellido;?></h2>
        <h2>Provincia: <?php echo $provincia;?></h2>
        <h2>Municipio: <?php echo $municipio;?></h2>
        <h2>Telefono: <?php echo $telefono;?></h2>
        <button id="btnShow" class="btn btn-warning" style="margin:auto; width:10%;">Editar</button>
      </div>

      </div>

      <script type="text/javascript">
        $('#btnShow').on('click',function(){
          $('#containerMod').css("visibility",'visible');
          $('#containerMod').css("margin-top",'15%');

        })
      </script>



    <div class="container-fluid" id="containerMod" style="visibility:hidden; margin:auto;">
      <div class="col-md-4 col-md-offset-4 contFormEdit">
        <div class="text-center letraGris">
          <h4>Modificar Perfil</h4>
        </div>
        <form class="formEditPerfil" action="../php/formEdit.php" method="post" id="formEditPerfil" style="width:100%;">
          <div class="form-group letraGris">
            <label for="nombre">Nombre</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input type="text" name="nombreEdit" class="form-control" required >
            </div>

          </div>

          <div class="form-group letraGris">
            <label for="apellido">Apellido</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input type="text" name="apellidoEdit" class="form-control" >
            </div>

          </div>

          <div class="form-group letraGris">
            <label for="pass">Contraseña</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="text" name="passEdit" class="form-control" >
            </div>



          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-danger btn-block" name="btnCambios">Guardar Cambios</button>
          </div>

        </form>
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
