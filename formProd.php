<?php
include_once("headerSecundario.php");

?>

<div class="container" id="containerFormProd">
  <div class="text-center" id="infoForm">
    <h4>Formulario de entrada de producto</h4>
  </div>

<div class="formUpload">

  <form action="#" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="Titulo">Titulo:</label>
      <input type="text" name="tituloProd" id="tituloProd" class="form-control" placeholder="Ingrese El Titulo" required>
    </div>
    <div class="form-group">
      <label for="marca">Marca:</label>
      <input type="text" name="marcaProd" class="form-control" placeholder="Ingrese La Marca" required>
    </div>
    <div class="form-group">
      <label for="color">Color:</label>
      <input type="text" name="colorProd" class="form-control" placeholder="Ingrese El Color" required>
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
