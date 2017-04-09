<?php
$clave=$_POST['clave'];
include("funciones.php");

switch ($clave) {
  case 'Bicicleta':
    $sql = "SELECT * FROM testpost WHERE categoria = 'Bicicleta'";
    viewAllMenu($sql);
    break;

      case 'Accesorio':
        $sql = "SELECT * FROM testpost WHERE categoria = 'Accesorio'";
        viewAllMenu($sql);
        break;

          case 'Repuestos':
            $sql = "SELECT * FROM testpost WHERE categoria = 'Repuestos'";
            viewAllMenu($sql);
            break;

            case 'Todo':
              $sql = "SELECT * FROM testpost";
              viewAllMenu($sql);
              break;
}






 ?>
