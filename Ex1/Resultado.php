<!DOCTYPE html>
<html>
<head>
	<title>Resultado Equació</title>
</head>
<body>

	<?php 

		$A= $_GET["a"];
		$B= $_GET["b"];
		$C= $_GET["c"];

		echo "A: $A <br>";
		echo "B: $B <br>";
		echo "C: $C <br>";

		$neg = -1;

		$menosb = $B * $neg;
		$oper1 = pow($B, 2);
		$oper2 = 4 * $A * $C;
		$resta = $oper1 - $oper2;
		$raiz =  sqrt ( $resta);
		$dos_a = 2 * $A;

		if ($dos_a > 0 and $resta>0){    //metodo para controlar la division por 0 y la raiz de un numero negativo

		$resultado1 = ($menosb + $raiz) / $dos_a;
		$resultado2 = ($menosb - $raiz) / $dos_a;
   
    	}else{

		$resultado1 = 0;
		$resultado2 = 0;
    	}

		echo "el valor de x1 es: ".$resultado1." <br />";
		echo "el valor de x2 es: ".$resultado2." <br />";

	?>

	<form action="formulario.php">
		<button type="submit" name="Back">Nueva ecuacion </button> 
	</form>

</body>
</html>