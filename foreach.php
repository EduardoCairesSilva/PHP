<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForEach</title>
</head>

<body>

    <?php

    $listas = ['Mesa', 'Cadeira', 'Carro', 'Luva'];

    foreach ($listas as $lista) {
        echo "$lista";
        if ($lista == 'Mesa') {
            echo '(* Mesa com 10% de desconto)';
        };

        echo '<br>';
    }

    ?>

</body>

</html>