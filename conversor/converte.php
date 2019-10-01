<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conversor de Moeda</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <style>
        body {
            background-color: #333;
            color: white;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            text-align: center;
        }

        .conversor {
            border: solid 2px white;
            border-radius: 10px;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
            line-height: 40px;
        }

        .conversor * {
            border-radius: 20px;
        }
    </style>
</head>
<?php

echo "<form class='conversor mt-5'>";

if (!empty($_POST) && is_numeric($_POST['valor'])) {

    $moeda1 = $_POST['moeda1'];
    $moeda2 = $_POST['moeda2'];
    $valor = floatval($_POST['valor']);
    $resultado;

    switch ($moeda1) {
        case 'real':
            switch ($moeda2) {

                case 'euro':
                    $resultado = number_format($valor/4.5454545455, 2, ',', '.');
                    echo " $valor Reais equivalem a $resultado Euros";
                    break;

                case 'dollar':
                    $resultado = number_format($valor/4.1666666667, 2, ',', '.');
                    echo " $valor Reais equivalem a $resultado Dolares";
                    break;

                case 'libra':
                    $resultado = number_format($valor /5, 2, ',', '.');
                    echo " $valor Reais equivalem a $resultado Libras";
                    break;

                case 'bitcoin':
                    $resultado = number_format($valor /41666.66666666666, 6, ',', '.');
                    echo "$valor Reais equivalem a $resultado Bitcoins ";
                    break;

                default:
                    echo "Selecione Moedas Diferentes para a conversão";
                    break;
            }
            break;

        case 'euro':
            switch ($moeda2) {
                case 'real':
                    $resultado = number_format($valor * 0.2227171492, 2, ',', '.');
                    echo " $valor Reais equivalem a $resultado Euros";
                    break;

                case 'dollar':
                    $resultado = number_format($valor * 1.121, 2, ',', '.');
                    echo " $valor euros equivalem a $resultado Dolares";
                    break;

                case 'libra':
                    $resultado = number_format($valor * 0.1976284584, 2, ',', '.');
                    echo " $valor Reais equivalem a $resultado Libras";
                    break;

                case 'bitcoin':
                    $resultado = number_format($valor * 0.00011, 5, ',', '.');
                    echo "$valor em euro equivale a $resultado bitcoin";
                    break;

                default:
                    echo "Selecione Moedas Diferentes para a conversão";
                    break;
            }
            break;

        case 'dollar':
            switch ($moeda2) {
                case 'real':
                    $resultado = number_format($valor / 0.2448579824, 2, ',', '.');
                    echo " $valor Dollares equivalem a $resultado Reais";
                    break;

                case 'euro':
                    $resultado = number_format($valor / 1.1013215859, 2, ',', '.');
                    echo " $valor Dollares equivalem a $resultado Euros";
                    break;

                case 'libra':
                    $resultado = number_format($valor / 1.2345679012, 2, ',', '.');
                    echo " $valor Dollares equivalem a $resultado Libras";
                    break;

                case 'bitcoin':
                    $resultado = number_format($valor / 10101.01010101, 6, ',', '.');
                    echo " $valor Dollares equivalem a $resultado Bitcoins";
                    break;

                default:
                    echo "Selecione Moedas Diferentes para a conversão";
                    break;
            }
            break;

        case 'libra':
            switch ($moeda2) {
                case 'real':
                    $resultado = number_format($valor / 0.1970831691, 2, ',', '.');
                    echo " $valor Libras equivalem a $resultado Reais";
                    break;

                case 'dollar':
                    $resultado = number_format($valor / 0.805152979, 2, ',', '.');
                    echo " $valor Libras equivalem a $resultado Dollares";
                    break;

                case 'euro':
                    $resultado = number_format($valor / 0.8865248227, 2, ',', '.');
                    echo " $valor Libras equivalem a $resultado Euros";
                    break;

                case 'bitcoin':
                    $resultado = number_format($valor / 8333.33333333333, 6, ',', '.');
                    echo " $valor Libras equivalem a $resultado Bitcoin";
                    break;

                default:
                    echo "Selecione Moedas Diferentes para a conversão";
                    break;
            }
            break;

        case 'bitcoin':
            switch ($moeda2) {
                case 'real':
                    $resultado = number_format($valor / 0.0000240975, 2, ',', '.');
                    echo " $valor Bitcoin equivalem a $resultado Reais";
                    break;

                case 'dollar':
                    $resultado = number_format($valor / 0.0000985037, 2, ',', '.');
                    echo " $valor Bitcoin equivalem a $resultado Dollares";
                    break;

                case 'euro':
                    $resultado = number_format($valor / 0.0001083644, 2, ',', '.');
                    echo " $valor Bitcoin equivalem a $resultado Euros";
                    break;

                case 'libra':
                    $resultado = number_format($valor / 0.0001223313, 2, ',', '.');
                    echo " $valor Bitcoin equivalem a $resultado Libras";
                    break;

                default:
                    echo "Selecione Moedas Diferentes para a conversão";
                    break;
            }
            break;





        default:
            
            break;
    }
} else {
    echo "digite um valor numérico  para a conversão";
}
echo "<br><a href='index.php' class='btn btn-dark border-warning'>Voltar para opções do Coversor</a><br>";
echo "</form>";

?>
