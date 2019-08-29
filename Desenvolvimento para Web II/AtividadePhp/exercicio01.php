<!DOCTYPE html>
<html>
<head>
	<title>Recebe Valores</title>
</head>
<body>
<form>
	Valor A:<br>
	<input type="number" name="vA"><br>
	Valor B: <br>
	<input type="number" name="vB"><br>
	Valor C:<br>
	<input type="number" name="vC"><br>
	Valor D: <br>
	<input type="number" name="vD"><br>

	<button type="submit" name="btnSubmit">Calcular</button><br>

	<?php 
		if (!empty($_GET)&& is_numeric($_GET['vA'])&& is_numeric($_GET['vB'])&&is_numeric($_GET['vC'])&& is_numeric($_GET['vD'])){

			$vA = $_GET ['vA'];
			$vB = $_GET ['vB'];
			$vC = $_GET ['vC'];
			$vD = $_GET ['vD'];

			$somaAeC=$vA+$vC;
			$multiBeD=$vB*$vD;

			if ($somaAeC>$multiBeD){

				echo "A+C é maior que B*D <br>";
			} else if ($somaAeC<$multiBeD){

				echo "A+C é menor que B*D"; 
			}else {

				echo "A+C é igual a B*D";
			}

		}

	?>


</form>
</body>
</html>