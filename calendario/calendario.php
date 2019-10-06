<!DOCTYPE html>
<html>
<head>
	<title>Calendario</title>

	<?php
		$month = date("n");
		$nameMonth = date("F");
		$day = date("j");
		$year = date("Y");
		$dayOfTheWeek =date("w");
		$daysOfTheMonth = date("t");
		$dias = 1;
		$dia =1;
		$month_start = strtotime('first day of this month', time());
		$firstDayOfTheMonth = date('w', $month_start);
		
		echo "<table border=1 width=294 >";
	 	echo "<tr><th colspan=7> $nameMonth $year </th></tr>";
	 	echo "<tr><td width=42>Lunes</td>	<td width=42>Martes</td>	<td width=42>Miercoles</td>		<td width=42>Jueves</td>
			  <td width=42>Viernes</td>		<td width=42>Sabado</td>	<td width=42>Domingo</td></tr>";
		for ($contadorSemana=0; $contadorSemana <5; $contadorSemana++) { 
			# code...
			echo "<tr></tr>";
			
			for ($contadorDia=0; $contadorDia <7 ; $contadorDia++) { 
				if($dias<$firstDayOfTheMonth|| $dia>$daysOfTheMonth){
					echo "<td> </td>";
				}else if($dia==$day){
					echo "<td bgcolor='cyan' align=center> $dia </td>";
					$dia +=1;
				}else{
					echo "<td align=center> $dia </td>";
					$dia +=1;
				}
				$dias +=1;
			}
			
		}
	?>

</head>
<body>

</body>
</html>
