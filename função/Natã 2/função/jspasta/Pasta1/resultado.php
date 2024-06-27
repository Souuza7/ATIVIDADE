<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <h1>Apresentando o Resultado</h1>
        <p>
            <?php
            $numero = $_REQUEST["numero"] ?? 0;
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            echo "O número escolhido foi <strong> $numero </strong>";
            echo "<br>Seus sucessor é $antecessor";
            echo "<br>Seus sucessor é $sucessor";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
    </main>
</body>

</html>