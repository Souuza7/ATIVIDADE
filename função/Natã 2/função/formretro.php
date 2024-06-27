<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Reatroalimentado</title>
</head>
<body>
    <?php
    $valor = $_GET['valor1'] ?? 0; 
    $valor = $_GET['valor2'] ?? 0;
    ?>
    <main>
        <h1>Calculando Valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">1º valor</label>
            <input type="number" name="valor1" id="valor1">
            <label for="valor2">2º valor</label>
            <input type="number" name="valor2" id="valor2">
            <input type="submit" value="Calcular">  
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
        $soma = $valor1 + $valor2;
        $media = ($valor1 + $valor2) /2;
        $multi = $valor1 * $valor2;
        echo "A soma entre os valores $valor1 e $valor2 é igual a $soma.";
        echo "<p>A média entre os valores $valor1 e $valor2 é igual a $media.</p>";
        echo "<p>A multiplicação entre os valores é igual a $mult   .</p>"
        ?>
    </section>
</body>
</html>