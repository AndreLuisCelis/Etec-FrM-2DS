<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                                                                                   
    <link rel="stylesheet" href="css/bootstrap.min.css" >






	<title>JOKENPO</title>
</head>
<div class="alert alert-primary" role="alert">

	 </a> <center><h1>JO KEN PO</h1></center> 
  



<body>

	<form >
		<p class="text-danger"> </a> <h1>Selecione uma opção:</h1> </p>
		<input type="radio" name="jogo" value="P">
		<img src="img/pedra.png" width="100" height="80"> 
		<input type="radio" name="jogo" value="PA">
		<img src="img/papel.png" width="100" height="80">
		<input type="radio" name="jogo" value="T">
		<img src="img/tesoura.png" width="100" height="80">
		<br>
		<br>
		<button type="submit" class="btn btn-danger">Enviar</button>
		<button type="submit" class="btn btn-danger">Limpar</button>

		<option></option>

	</form>
	</div>


	
</body>
</html>
<div class="alert alert-secondary" role="alert">


</a> <center> <h1>
<?php
if(!empty($_GET)){

$play = $_GET['jogo'];
$random = rand(1,3); 


	switch ($play) {
		case 'P':
			if ($random == 1){
				echo "  </a> <center><h1> Pedra VS Papel <br> você perdeu! </h1></center>";
			}

			elseif ($random ==2) {
				echo " </a> <center><h1> Pedra VS Tesoura <br> você ganhou! </h1></center>";
			}

			else {
				echo " </a> <center><h1>  Pedra VS Pedra <br> Deu empate! </h1></center>";
			}


			break;

		case 'PA':
			if ($random == 1) {
				echo " </a> <center><h1> Papel VS Pedra <br> Você ganhou! </h1></center>";
				}	
		elseif ($random == 2) {
				echo " </a> <center><h1> Papel VS Tesoura <br> Você Perdeu! </h1></center>";
				}		
		else {
			echo " </a> <center><h1> Papel VS Papel <br> Deu empate! </h1></center>";
		}		

			break;

		case 'T':
			if ($random == 1) {
					echo "  </a> <center><h1> Tesoura VS Pedra <br> Você Perdeu! </h1></center>";
				}	
			elseif ($random == 2) {
					echo " </a> <center><h1> Tesoura VS Papel <br> Você ganhou! </h1></center>";
				}
			else {
				echo " </a> <center><h1> Tesoura VS Tesoura <br> Deu empate! </h1></center>";
			}	


		break;
		
		default:

		break;		
	}
}

	
?>

