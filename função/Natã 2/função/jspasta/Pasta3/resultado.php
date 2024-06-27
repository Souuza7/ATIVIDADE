<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido-Bebidas</title>
</head>

<body>
    <div>
        <?php
        $qtde = isset($_GET["qtde"]) ? $_GET["qtde"] : 0;
        $beb = isset($_GET["beb"]) ? $_GET["beb"] : 1;
        switch ($beb) {
            case 1:
                $pedido = $qtde * 3;
                $escolha = "café";
                break;
            case 2:
                $pedido = $qtde * 8;
                $escolha = "capuccino";
                break;
            case 3:
                $pedido = $qtde * 5;
                $escolha = "Refrigerante";
                break;
            case 4:
                $pedido = $qtde * 6;
                $escolha = "suco";
                break;
            case 5:
                $pedido = $qtde * 5;
                $escolha = "pepsi";
                break;
            case 6:
                $pedido = $qtde * 7;
                $escolha = "bolo de cenoura";
        }
        echo "Você pediu $qtde $escolha, irá pagar $pedido.";
        ?>
    </div>
    <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
</body>

</html>