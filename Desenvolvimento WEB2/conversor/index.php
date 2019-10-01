<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conversor de Moeda</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/img.png" />

    <style>
    header {
  position: relative;
  background-color: black;
  height: 75vh;
  min-height: 25rem;
  width: 60%;
  overflow: hidden;
  margin: 0 auto;
}

header video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  border-radius: 15px;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

header .container {
  position: relative;
  z-index: 2;
}

header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}

@media (pointer: coarse) and (hover: none) {
  header {
    background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
  }
  header video {
    display: none;
  }
}
    body{
        background-color: #333;
        color: white;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        text-align: center;
    }
    .conversor{
        position: relative;
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
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="video/Mt_Baker.mp4" type="video/mp4">
  </video>
  <div class="container h-100 ">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-3">Video Header</h1>
        <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>
            <section class="conversor">

        <h1 class="text-success"> Conversor de Moedas</h1>

        <form  class="" method="POST" action="converte.php">
            <label for="valor" class='text-warning'>Digite o Valor em Reais para Converter</label><br>
            <input type="text" name="valor"><br>

            <label for="moeda1"class='text-info'>Moeda de origem: </label>
            <select name="moeda1" id="moeda1"><br>

                <option value="real">Real</option>
                <option value="euro">Euro</option>
                <option value="dollar">Dollar</option>
                <option value="libra">Libra</option>
                <option  value ="bitcoin">Bitcoin</option>

            </select><br>

            <label for="moeda2" class='text-info'>Moeda de destino: </label>
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
      </div>
    </div>
  </div>
</header>
    <section class="mt-2 h-200">
        <p class='text-info'><strong>Nome:</strong> André Luis Celis <strong> RM:</strong> 19324
        <strong>2ºDS</strong></p>
    </section>

</body>

</html>