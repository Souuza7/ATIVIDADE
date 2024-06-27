<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor</title>
</head>

<body>

        <?php
        $ind = $_GET["mes"];
        $mess = array("Jan","Fev","Mar","Abr","May","Jun","Jul");
        $dias = array(31,29,31,30,31,30,31);
        echo "O conteudo $mess[$ind] e tem $dias[$ind] dias";
       ?>
       <br>
    </div>
</body>

</html>