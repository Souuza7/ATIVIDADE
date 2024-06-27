<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
    <link rel="stylesheet" href="0504.css">
</head>

<body>
    <header>
        <h1>Dados enviados</h1>
    </header>
    <main>
        <?php
        $nome = $_GET["nome"];
        $sobrenome = $_GET["gênero"];
        echo "<br>Bom teconhecer $nome ";
        ?>
        <a href="javascript:history.go(-1)">Voltar para a página anterior"</a>
    </main>
</html>