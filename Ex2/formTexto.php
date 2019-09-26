<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>

	<h1>Rellena los datos</h1>

	<form action="datos.php" method="GET">
	<p>Nombre: <input type="text" name="name"></p>
	<p>Correo: <input type="text" name="mail"></p>
	<p>Genero:</p>
	<p>	Masculino  <input name="Genero" type="radio" id="Genero" value="Masculino"/> Femenino  <input name="Genero" type="radio" id="Genero" value="Femenino" /></p>
	<p><input type="submit" name="Enviar"></p>
	</form>

</body>
</html>