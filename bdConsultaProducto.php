<?php

//Conexion



if (isset($_POST["precio"]))
{
$salida="";
$query="SELECT * FROM productos WHERE precio <=".$_POST["precio"]. "ORDER BY precio DESC";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0){

}
else {
  $salida="No hay productos de este precio";
}


}





 ?>
