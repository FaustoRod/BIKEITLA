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

    <div class="table-responsive">
      <table class="table ">
        <thead>
          <tr>
            <th>id</th>
            <th>Titulo</th>
            <th>Marca</th>
            <th>Tipo</th>
            <th>Categoria</th>
            <th>Precio</th>
            <th>Foto</th>
            <th>Accion</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Bluebird</td>
            <td>Craynest</td>
            <td>BMX</td>
            <td>Bicicleta</td>
            <td>$6000</td>
            <td><img class="imgTabla" src="img/nevera.jpg" alt=""></td>
            <td><button type="button" id="btnEdit" class="btn btn-warning">Editar</button></td>
            <td><button type="button" id="btnElim" class="btn btn-danger">Eliminar</button></td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>
    </div>
