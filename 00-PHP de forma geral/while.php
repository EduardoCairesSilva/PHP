<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio com while</title>
</head>

<body>

    <?php

    $registros = [
        array('titulo' => 'titulo 1', 'conteudo' => 'Conteudo noticia 1'),
        array('titulo' => 'titulo 2', 'conteudo' => 'Conteudo noticia 2'),
        array('titulo' => 'titulo 3', 'conteudo' => 'Conteudo noticia 3'),
        array('titulo' => 'titulo 4', 'conteudo' => 'Conteudo noticia 4')
    ];

    echo '<pre>';
    print_r($registros);
    echo '<hr>';
    echo "A quantidade de registros é: " . count($registros);
    echo "<br>";
    $idx = 0;
    while($idx < count($registros)) {
        echo '<h1>' . $registros[$idx]['titulo'] .'</h1>';
        echo '<h2>' . $registros[$idx]['conteudo'] .'</h2>';
        $idx++;
    }

    ?>

</body>

</html>