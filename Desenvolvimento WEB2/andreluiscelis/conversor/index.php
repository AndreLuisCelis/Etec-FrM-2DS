<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conversor de Moeda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
    body{
        background-color: #333;
        color: white;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        text-align: center;
    }
    .conversor{
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

<body>
    <header>
        <p><strong>Nome:</strong> André Luis Celis <strong> RM:</strong> 19324
        <strong>2ºDS</strong></p>
    </header>
    <section class="conversor">

        <h1 class="text-muted"> Conversor de Moedas</h1>

        <form action="" class="bg-dark">
            <label for="valor">Digite o Valor em Reais para Converter</label><br>
            <input type="text" name="valor"><br>

            <label for="moeda">Selecione a moeda a qual deseja converter</label><br>
            <select name="moeda" id="moeda"><br>

                <option value="euro">Euro</option>
                <option value="dollar">Dollar</option>
                <option value="libra">Libra</option>

            </select>
            <button type="submit">Converter</button><br>

            <?php

            if (!empty($_GET)&&is_numeric($_GET['valor'])){

                $moeda = $_GET['moeda'];
                $valor =floatval( $_GET['valor']);
                $resultado ;

                switch ($moeda) {
                    case 'euro':
                        $resultado=number_format($valor*0.2227171492,2,',','.');
                        echo " $valor Reais equivalem a $resultado Euros";
                        break;

                    case 'dollar':
                        $resultado=number_format($valor*0.2463054187,2,',','.');
                        echo " $valor Reais equivalem a $resultado Dolares";
                        break;
                    
                    case 'libra':
                        $resultado=number_format($valor*0.1976284584,2,',','.');
                        echo " $valor Reais equivalem a $resultado Libras";
                        break;
                    
                    default:
                        # code...
                        break;
                }


            }else {
                echo "digite um valor numérico em reais para a conversão";
            }

            ?>


        </form>
    </section>
</body>

</html>