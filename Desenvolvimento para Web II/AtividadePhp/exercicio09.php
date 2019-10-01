	<?php 
	include "cebecalhoemenu.php";
 	?>
	<form>
		<p>9)  Crie uma página que informe IMC de uma pessoa baseando-se em seu peso e altura.</p>
		Altura : <input type="text" name="altura"><br> <br>
		Peso : <input type="text" name="peso"><br><br>
		<input type="submit" name="bnt" value="Enviar"><br>
		<?php

		if (!empty($_GET)&& is_numeric($_GET['peso'])&&is_numeric($_GET['altura'])){

			$altura = $_GET['altura'];
			$peso =$_GET['peso'];
			$imc = floatval($peso)/(floatval($altura)*floatval($altura));

			if ($imc<18.5){

			echo " IMC :  Magreza";
		} else if ($imc>18.5||$imc<24.9){

			echo " IMC : $imc Normal";

		}else if ($imc>24.9||$imc<29.99){

			echo " IMC :  Sobre Peso";

		} else if ($imc>29.99||$imc<39.9) {

			echo "IMC :  Obesidade ";
		} else {

			echo " IMC : Obesidade Morbida";
		}
		}


		 ?>
	</form>
