<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conversor de Moeda</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

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
    <header class="mt-2">
        <p><strong>Nome:</strong> André Luis Celis <strong> RM:</strong> 19324
        <strong>2ºDS</strong></p>
    </header>
    <section class="conversor">

        <h1 class="text-success"> Conversor de Moedas</h1>

        <form  class="" method="POST" action="converte.php">
            <label for="valor">Digite o Valor em Reais para Converter</label><br>
            <input type="text" name="valor"><br>

            <label for="moeda1">Moeda de origem: </label>
            <select name="moeda1" id="moeda1"><br>

                <option value="real">Real</option>
                <option value="euro">Euro</option>
                <option value="dollar">Dollar</option>
                <option value="libra">Libra</option>
                <option  value ="bitcoin">Bitcoin</option>

            </select><br>

            <label for="moeda2">Moeda de destino: </label>
            <select name="moeda2" id="moeda2"><br>

                <option value="real">Real</option>
                <option value="euro">Euro</option>
                <option value="dollar">Dollar</option>
                <option value="libra">Libra</option>
                <option  value ="bitcoin">Bitcoin</option>

            </select><br>

            <button class ="btn-dark border-success"type="submit">Converter</button><br>




        </form>
    </section>
</body>

</html>