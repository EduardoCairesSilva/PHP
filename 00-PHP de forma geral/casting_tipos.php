<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting de tipost</title>
</head>

<body>

    <?php

    $valor = 10;
    $valor2 = (float) $valor;

    echo $valor . ' ' . gettype($valor);
    echo '<br>';
    echo $valor2 . ' ' . gettype($valor2);

    ?>

</body>

</html>