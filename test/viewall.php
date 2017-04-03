<!DOCTYPE html>
<html>

<head>
	
	</head>

	<body>
		<form method="post" action="viewall.php" enctype="multipart/form-data">
			
			<button type="submit" name="submit">SUBIR</button>
		</form>
	
		<div>
			<?php
				if(isset($_POST['submit'])){
					include("database.php");
					include("funciones.php");
					
					viewall($conexion);
					viewpics($conexion);
					
				}
			?>
		</div>
	</body>

</html>