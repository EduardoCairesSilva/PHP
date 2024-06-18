<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variaveis</title>
</head>

<body>

    <?php

    // String
    $nome = "Eduardo Caires Silva";

    // Int
    $idade = 20;

    // Float
    $peso = 80.5;

    // Boolean
    $fumante_sn = true; // (true = 1) or (false = vazio).
    
    ?>

    <h1>Ficha cadastral</h1>
    <p>Nome: <?= $nome ?> </p>
    <p>Idade: <?= $idade ?> </p>
    <p>Peso: <?= $peso ?> </p>
    <p>Fumante_sn: <?= $fumante_sn ?> </p>

</body>

</html>