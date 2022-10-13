<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <title>Calculando o IMC </title>
</head>
<body>

    @if($calculoIMC <= 18.5)
        <div class="alert alert-danger">
          Você está abaixo do peso!
        </div>
    @elseif ($calculoIMC >= 18.6 && $calculoIMC < 24.9)
        <div class="alert alert-success">
        Você está com o peso ideal!
        </div>
    @elseif ($calculoIMC >= 25 && $calculoIMC < 29.9)
        <div class="alert alert-danger">
        Você está com o peso ideal!
        </div>
    @elseif ($calculoIMC >= 30 && $calculoIMC < 34.9)
        <div class="alert alert-danger">
        Você possui obesidade grau I!
        </div>
    @elseif ($calculoIMC >= 35 && $calculoIMC < 39.9)
        <div class="alert alert-danger">
        Você possui obesidade grau II!
        </div>
    @else
        <div class="alert alert-danger">
        Você possui obesidade mórbida!
        </div>
    @endif


</body>
</html>
