<?php
include_once("headerSecundario.php");
 ?>

 <div class="contPagPerfil">

   <div class="container-fluid " style="height:250px">
     <div class="col-md-12" >

       <div class="col-md-6 col-md-offset-3"  >
         <div class="col-md-4 col-md-offset-4"  style=" background-color:inherit; border:1px solid red;">
           <img src="img/perfil.jpg" alt="perfil" style="margin:auto; background-color:inherit; width:150px; height:150px; border-radius:90px;">
         </div>
       </div>
     </div>

     <div class="text-center" style=" background-color:inherit;">
       <h6>Roniel Antonio Polanco Mejia</h6>
     </div>

     </div>


   <div class="container-fluid" id="containerMod">
     <div class="col-md-4 col-md-offset-4 contFormEdit">
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

 <footer class="mdl-mini-footer" style="bottom:0px;position:relative; width:100%;">
   <div class="mdl-mini-footer__left-section">
     <div class="mdl-logo"></div>
     <ul class="mdl-mini-footer__link-list">
     </ul>
   </div>
 </footer>
