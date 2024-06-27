<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funções</title>
</head>
<body>
    <div>
        <?php
        $produto = "Sorvete";
        $valor = 29.5;
        printf("O %s custa R$ %. 2f <br>", $produto, $valor);
        $vto = array (2,5,7,1,5);
        print_r($vto);
        echo "<br>";
        var_dump($vto);
        echo "<br>";
        var_export($vto);
        ?>
    </div>
</body>
</html>