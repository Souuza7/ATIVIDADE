<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>

<body>
    <div>
        <form action="tabu.php" method="get">
            <select name="num" id="idinum">
                <?php
                 for ($c = 1; $c <= 10; $c++) {
                    echo "<option>$c </option>";
                } ?>
            </select>
            <input type="submit" value="Tabuada">
    </div>
</body>

</html>