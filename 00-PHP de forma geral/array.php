<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>

    <?php

    $lista_frutas = array('Maça', 'Banana', 'Abacate', 'Laranja', 'Tomate');

    echo "<pre>";
    var_dump($lista_frutas);
    echo "<hr>";
    echo "<br>";
    echo "<pre>";
    print_r($lista_frutas);
    echo "<hr>";
    echo "<br>";

    // Associativos:

    $lista_frutas = ['a' => 'Maça', 'b' => 'Banana', 'c' => 'Abacate', 'd' => 'Laranja', 'e' => 'Tomate'];
    echo '<pre>';
    var_dump($lista_frutas);
    echo '<br>';

    ?>

</body>

</html>