<?php

  include("database.php");

  $id = $_POST['id'];

  $sql="SELECT * FROM ads WHERE id = {$id}";

  $resultado = $conexion->query($sql);

  if($row = mysqli_fetch_array($resultado)){
    echo "<form action='editAd.php' method='post' enctype='multipart/form-data'>
    <input name='ad' type='file' accept='image/x-png, image/gif, image/jpeg'/>
    <input type='text' value='{$id}' name='idAd' style='visibility:hidden;'/>

    <input type='text' value='{$row['imagen']}' name='oldAd' style='visibility:hidden;'/>
    <button>Editar</button>
    </form>";
  }

?>
