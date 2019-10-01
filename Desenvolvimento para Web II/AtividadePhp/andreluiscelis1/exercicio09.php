	<?php 
	include "cebecalhoemenu.php";
 	?>
	<form>
		<p>9)  Crie uma página que informe IMC de uma pessoa baseando-se em seu peso e altura.</p>
		Altura : <input type="text" name="altura"><br> <br>
		Peso : <input type="text" name="peso"><br><br>
		<button type="submit" name="bnt" >Enviar</button><br>
		<?php

		if (!empty($_GET)&& is_numeric($_GET['peso'])&&is_numeric($_GET['altura'])){

			$altura = $_GET['altura'];
			$peso =$_GET['peso'];
			$imc = floatval($peso)/(floatval($altura)*floatval($altura));
			$vall = number_format($imc,1);


			if ($imc<18.5){

			echo " IMC :$vall  Magreza";
		} else if ($imc>18.5&&$imc<24.9){

			echo " IMC : $vall  Normal";

		}else if ($imc>24.9&&$imc<29.99){

			echo " IMC : $vall Sobre Peso";

		} else if ($imc>29.99&&$imc<39.9) {

			echo "IMC :$vall  Obesidade ";
		} else {

			echo " IMC :$vall Obesidade Morbida";
		}
		}else {
			echo "digite os Valore";
		}


		 ?>
	</form>
