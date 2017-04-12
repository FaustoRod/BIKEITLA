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
      <label for="Categoria">Categoria:</label>
      <select class="form-control" id= "selectCategoria" name="Categoria">
        <option value="Bicicleta">Bicicleta</option>
        <option value="Accesorio">Accesorio</option>
        <option value="Repuestos">Repuestos</option>
      </select>
    </div>

    <div class="form-group">
      <label for="Tipo">Tipo:</label>
      <select class="form-control" id="selectTipo" name="Tipo">
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
  <script src=""></script>
</div>..

Herramientas
Gomas
Amortiguadores
Piezas pequeñas
Aros
Rayos
Engranajes
Corta Cadenas
Switch de cambios delanteros
Switch de cambios traseros
Frenos
Pastillas
Peda


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


  SELECT usuario.nombre as nombre_usuario,usuario.apellido AS
  apellido_usuario,usuario.usuario AS user_usuario,usuario.email
  AS email_usuario,usuario.region AS region_usuario,usuario.provincia
  AS provincia_usuario, usuario.municipio as usuario_municipio,usuario.telefono1 as usuario_telefono,
  usuario.telefono2 as usuario_telefono2, publicaciones.id AS id ,publicaciones.titulo as titulo, publicaciones.categoria as categoria,
  publicaciones.tipo as tipo,publicaciones.marca as marca,publicaciones.modelo as modelo,
  publicaciones.precio AS precio, publicaciones.descripcion as descripcion FROM publicaciones INNER JOIN usuario on
  publicaciones.id_user= usuario.id
