<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array em pesquisa</title>
</head>

<body>

    <?php

    $lista_frutas = ['Maçã', 'Pera', 'Banana', 'Goiaba'];

    echo '<pre>';
    print_r($lista_frutas);
    echo '<hr>';

    $existe = in_array('Laranja', $lista_frutas);

    if ($existe) {
        echo 'Sim, existe o valor pesquisado no array.';
    } else {
        echo 'Não, não existe o valor pesquisado no array.';
    };

    ?>

</body>

</html>