<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <main>
        <?php
            $nome = $_GET["nome"];
            $genero = $_GET["gender"];

            if ($genero == "male") {
                echo "Olá, prazer em conhece-lo, senhor $nome.";
            } else {
                if($genero == "female") {
                echo "Olá, prazer em conhece-la, senhora $nome.";
                }
            }

            echo "<br><br>Nome:$nome<br>Gênero: $genero<br>Agradecemos por utilizar o nosso site!"
        ?>
</body>

</html>