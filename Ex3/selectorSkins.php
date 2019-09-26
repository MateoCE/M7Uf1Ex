<!DOCTYPE html>
<html>
<link href="elegirCss" rel="stylesheet" type="text/css">
<head>
	<title>Selector de Skind</title>
	<?php
	$directory = 'Css/';
	$scanned_directory = array_diff(scandir($directory), array('..', '.','*.html'));
	//print_r(array_values($scanned_directory));

	$file= glob($directory. "*.css");
	foreach ($file as $filew) {
		//echo $filew;
		$files[]=$filew;
	}
	//print_r(array_values($files));

	?>
</head>
<body>

	<select id="SelectSkin" onchange="MyFuncton()">
	<?php
	foreach($files as $key => $value):
	echo '<option value="'.$key.'">'.$value.'</option>'; //close your tags!!
	endforeach;
	?>
	<input type="submit" method="post" id="opcion" value="Elegir"></input>
	</select>
	

</body>
</html>