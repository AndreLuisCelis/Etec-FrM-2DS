
	<?php 
	include "cebecalhoemenu.php";
 	?>
	<form>
		<p>7) Crie uma página para pegar o nome do cliente e o valor de sua compra. Ao clicar em verificar será informado o nome do cliente, o valor da compra e o desconto aplicado conforme as condições abaixo:
			a. Se o valor da compra for até 200 – desconto de 10%
			b. Se o valor da compra for entre 201 e 500 – desconto de 15%
			c. Se o valor for maior que 500 – desconto de 20%</p>
		
		Nome do Cliente : <input type="text" name="nome"><br><br>
		Valor da Compra : <input type="number" name="valor"><br>
		<button type="submit" name="btn">Enviar</button><br>

		<?php 
			if (!empty($_GET)&& is_numeric($_GET['valor'])){

				$nome = $_GET['nome'];
				$valor = $_GET['valor'];
				$desconto=0;

				echo "<br> Nome do Cliente $nome <br> Valor da Compra $valor";

				if ($valor<=200){

					$desconto=$valor*0.10;

				}else if($valor>200&&$valor<=500){

					$desconto=$valor*0.15;
					
				}else if ($valor>500){

					$desconto=$valor*0.20;
				}
				echo "<br>Valor do Desconto $desconto<br>";
			}else {
			echo "digite os Valore";
		}

		 ?>

	</form>

