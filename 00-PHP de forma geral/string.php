<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formatação de strings</title>
</head>

<body>

    <?php

    $texto = 'fazendo a formatação das strings';

    echo $texto . '<br>'; 
    echo strtolower($texto);

    echo '<hr />';
    echo $texto . '<br>';
    echo strtoupper($texto);

    echo '<hr />';
    echo $texto . '<br>';
    echo ucfirst($texto);

    echo '<hr />';
    echo $texto . '<br>';
    echo strlen($texto);

    echo '<hr />';
    echo $texto . '<br>';
    echo str_replace($texto, '', 'Substituido');

    echo '<hr />';
    echo $texto . '<br>';
    echo substr($texto, 26, 8);

    ?>

</body>

</html>