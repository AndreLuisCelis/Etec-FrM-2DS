

<!DOCTYPE html>
<html>
<head>
	<title>Seleção</title>
</head>
<body>

	<form>

		<select name="selecao">

			<option value='op1'>Opção1</option>
			<option value='op2'>Opção2</option>
			<option value ='op3'>Opção3</option>
			
		</select>
		<button type="submit" name="enviar">Enviar</button>

	</form>

</body>
</html>
<?php

if (!empty($_GET)){

	$selecao= $_GET['selecao'];
	echo "<br>";

	switch ($selecao) {
		case 'op1':
			echo " Voce selecionou a opção 1<br>";
			break;
		case 'op2':
			echo " Voce selecionou a opção 2<br>";
			break;
		case 'op3':
			echo " Voce selecionou a opção 3 <br>";
			break;
		default:
			echo " Selecione uma das opções";
			break;
	}

}

?>