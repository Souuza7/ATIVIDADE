<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="cssluci.css">
</head>
<body>
    <h2>Trabalho Lucimara</h2>
    <?php
    $numero = isset ($_GET["num"])?$_GET["num"]:10000;
    for ($contador=2; $contador <= 100; $contador++)
    {
        $resultado = $numero / $contador;
        echo "$numero : $contador = $resultado </br>";
    }
    ?>
    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>