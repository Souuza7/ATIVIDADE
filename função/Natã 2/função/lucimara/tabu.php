<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $numero = isset ($_GET["num"])?$_GET["num"]:1;
    for ($contador=1; $contador <= 10; $contador++)
    {
        $resultado = $numero * $contador;
        echo "$numero x $contador = $resultado </br>";
    }
    ?>
    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>