<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		$nombre = $_GET["name"];
		$correo = $_GET["mail"];
		$genero = $_GET["Genero"];

		$fichero = 'datos.txt';

		$datos= "$nombre\t$correo\t$genero\n";
		echo $datos;

		file_put_contents($fichero, $datos, FILE_APPEND | LOCK_EX);

		header("formTexto.php");
	?>

</body>
</html>