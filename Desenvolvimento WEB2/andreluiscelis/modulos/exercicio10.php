	<?php 
	include "cebecalhoemenu.php";
 	?>
	<form>
		<p>10) Crie uma página PHP que recebe o nome do funcionário, seu tempo de trabalho e seu salário bruto. Depois calcule o desconto do INSS a partir do salário bruto, considerando a tabela abaixo e, a cada ano trabalhado, o funcionário ganhará um bônus de R$ 50,00. </p>
		<img src="../img/img2.jpg">
		Nome do Funcionario: <input type="text" name="nome"><br> <br>
		anos de Trabalho: <input type="number" name="anos"><br><br>
		Salario Bruto: <input type="text" name="salario"><br><br>
		<button type="submit" name="bnt" >Enviar</button><br>
		<?php

		if (!empty($_GET)&& is_numeric($_GET['salario'])&&is_numeric($_GET['anos'])){

			$nome = $_GET['nome'];
			$salario = floatval($_GET['salario']);
			$anos = $_GET['anos'];
			$desconto;
			$bonus= $anos*50;
			$salarioebonus = $salario + $bonus;
			


			if ($salarioebonus<1751.81){

			$desconto= $salarioebonus*0.08;

		} else if ($salarioebonus>1751.82&&$salarioebonus<2919.72){

			$desconto = $salarioebonus*0.09;

		}else if ($salarioebonus>2919.73&&$salarioebonus<5839.45){

			$desconto = $salarioebonus*0.11;

		} else {

			$desconto = 642.34;
		}
			echo "Funcionario : $nome <br> ";
			echo "Bonus : $bonus <br> ";
			echo "Salario e Bonus : $salarioebonus<br> ";
			echo "Desconto INSS: $desconto <br> ";
			$liquido = $salarioebonus - $desconto;
			echo "Salario Liquido : $liquido";
			
			

		} else {
			echo "digite os Valore";
		}


		 ?>
	</form>
