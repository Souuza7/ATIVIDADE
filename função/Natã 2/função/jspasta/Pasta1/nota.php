<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
    <link rel="stylesheet" href="nota.css">
</head>

<body>
    <?php
    $nome = $_GET["nome"];
    $nota1 = $_GET["nota1"];
    $nota2 = $_GET["nota2"];
    $media = ($nota1 + $nota2) / 2;


    echo "$media";
    if ($media >= 60) {
        $resultado = "você está aprovado";
    }

    if ($media >= 50 && $media <= 59) {
        $resultado = "Você esta de recuperação";
    }
    if ($media < 50) {
        $resultado = "Você está reprovado";
    }
    echo "$nome, sua nota é $media e $resultado.";
    ?>
</body>

</html>