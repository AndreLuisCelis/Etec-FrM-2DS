	<?php 
	include "cebecalhoemenu.php";
 	?>
<form>
	<p>8) Crie uma página onde seja possível o usuário informar uma frase e a quantidade que ele quer que apareça a frase.</p>
	Informe uma Frase :<br> <input type="text" name="frase"><br><br>
	Informe quantas Vezes deseja Repetir a Frase : <br> <input type="number" name="repete"><br>
	<button type="submit" name="bntok" >Enviar</button><br>

	<?php 

		if (!empty($_GET)&& is_numeric($_GET['repete'])){

			$frase =$_GET['frase'];
			$repete=$_GET['repete'];


			for ($i=0; $i<intval($repete); $i++) { 

				$contador =$i+1;
				echo "$contador - $frase<br>";
			}

		}else {
			echo "digite os Valore";
		}

	 ?>
</form>
