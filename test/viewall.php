<!DOCTYPE html>
<html>

<head>
		<title>FOTOS</title>
		<style>

#imgs{
	display: flex;
	flex-direction: column;
}

		</style>
	</head>

	<body>
		<form method="post" action="viewall.php" enctype="multipart/form-data">

			<button type="submit" name="submit">SUBIR</button>

		</form>

			<input type="text" id="input-delete-post"> </input><br>
			<input type="text" id="input-delete-picname"> </input>
			<button type="submit" id="btn-delete">delete</button>


		<div id="imgs">
			<?php
				if(isset($_POST['submit'])){

					include("funciones.php");

				//	viewall(1);
					viewpics(5);

				}/*else if(isset($_POST['delete'])){

					include("database.php");
					include("funciones.php");
				}*/
			?>
		</div>
		<script src="jquery-311.min.js"></script>
		<script src="testjs.js"></script>
	</body>

</html>
