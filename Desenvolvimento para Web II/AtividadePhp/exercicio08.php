<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 8</title>
</head>
<body>
<form>
	Informe uma Frase : <input type="text" name="frase"><br><br>
	Informe quantas Vezes deseja Repetir a Frase : <input type="number" name="repete"><br>
	<input type="submit" name="bntok" value="Enviar"><br>

	<?php 

		if (!empty($_GET)&& is_numeric($_GET['repete'])){

			$frase =$_GET['frase'];
			$repete=$_GET['repete'];


			for ($i=0; $i<intval($repete); $i++) { 

				$contador =$i+1;
				echo "$contador - $frase<br>";
			}

		}

	 ?>
</form>
</body>
</html>