<?php
include_once("headerSecundario.php");

 ?>

 <div class="contFotoyNombre">
   <br>
   <div class="fotoPerfil">
     <img src="img/perfil.jpg" alt="perfil">
   </div>
   <div class="text-center" id="nombrePerfil">
     <h6>Roniel Antonio Polanco Mejia</h6>
   </div>
 </div>
 <div class="container">

   <div class="text-center">
     <h4>Productos Publicados</h4>
   </div>
    <div class="tablaAnuncios">
      <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Titulo</th>
      <th>Marca</th>
      <th>Color</th>
      <th>Precio</th>
      <th>Imagen</th>
      <th>Accion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Nevera</td>
      <td>LG</td>
      <td>Negra</td>
      <td>$120,000</td>
      <td id="imgTabla"><img src="img/nevera.jpg" alt="foto"></td>
      <td>
        <button type="button" class="btn btn-warning">Editar</button>
        <button type="button" class="btn btn-danger" name="button">Eliminar</button>
      </td>

    </tr>

  </tbody>
</table>
    </div>
 </div>
