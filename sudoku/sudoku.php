<!DOCTYPE html>
<html>
<head>

	<style type="text/css">
		table{
			height: 350px;
			width: 350px;
			border-spacing: 0px;
			text-align: center;

		}

		#borde_rigth{
			border-right-color: blue;
			border-right-width: 4px;
		}

		#borde_bottom{
			border-bottom-color: blue;
			border-bottom-width: 4px;
		}
	</style>

	<title>Sudoku</title>
	<?php 

	$matrix=[[1,2,3,4,5,6,7,8,9],[1,2,3,4,5,6,7,8,9],
	[1,2,3,4,5,6,7,8,9],[1,2,3,4,5,6,7,8,9],
	[1,2,3,4,5,6,7,8,9],[1,2,3,4,5,6,7,8,9],
	[1,2,3,4,5,6,7,8,9],[1,2,3,4,5,6,7,8,9],
	[1,2,3,4,5,6,7,8,9]];
	$numRandomFila ="";
	$numRandomColum = "";
	$numRandom ="";
	$contadorFila = 0;
	$contadorCasilla=0;

	echo "<table border=1>";

	foreach ($matrix as $fila) {

		echo "<tr >";
		$contadorFila += 1;

		foreach ($fila as $casilla) {

			$contadorCasilla +=1;

			if($contadorCasilla == 3 || $contadorCasilla == 6 ){
				echo "<td id='borde_rigth' >".$casilla."</td>";

			}else if($contadorFila == 3 || $contadorFila == 6){
				echo "<td id='borde_bottom'>".$casilla."</td>";
			}else{
				echo "<td >".$casilla."</td>";
			}

		}
		echo "</tr>";
		$contadorCasilla=0;
	}

	echo "</table>";

	 ?>
</head>
<body>

</body>
</html>