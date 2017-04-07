<?php
include_once("headerSecundario.php");
 ?>

 <div class="contPagPerfil">

   <div class="contFotoyNombre">
     <br>
     <div class="fotoPerfil">
       <img src="img/perfil.jpg" alt="perfil">
     </div>
     <div class="text-center" id="nombrePerfil">
       <h6>Roniel Antonio Polanco Mejia</h6>
     </div>
   </div>

   <div class="container" id="containerMod">
     <div class="contFormEdit">
       <div class="text-center letraGris">
         <h4>Modificar Perfil</h4>
       </div>
       <form class="formEditPerfil" action="#" method="post" id="formEditPerfil">
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
