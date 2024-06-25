<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo</title>
</head>

<body>

    <h1>Resumo do que foi visto</h1>

    <?php

    // Echo e print
    echo 'Resumo do que vimos em echo! <br />';
    print 'Print é a mesma coisa que echo <br />';

    // Variaveis (String, int, float , boolean...)
    $nome = 'Eduardo';
    $idade = 20;
    $peso = 80.76;
    $fuma_sn = true;

    echo "<p>Nome: $nome</p>";
    echo "<p>Idade: $idade</p>";
    echo "<p>Peso: $peso</p>";
    echo "<p>Fumante?: $fuma_sn</p>";

    // Concatenação (Aspas simples e aspas duplas)

    $pessoa = 'Eduardo';
    $brincadeira = 'correr';
    $tempo = 2;

    // Aspas simples se usa o operador . para concatenar
    echo 'A pessoa de nome ' . $pessoa . ' gosta muito de ' . $brincadeira . ' e ele já faz isso há ' . $tempo . ' anos.<br /> <br />';

    // Aspas duplas
    echo "A pessoa de nome $pessoa gosta muito de $brincadeira e ele já faz isso há $tempo anos.<br /> <br />";

    // Constantes
    define('DB_USER', 'user_db_server');
    define('DB_PASSWORD', 'password_server');
    define('DB_ACCESS', 'access_server');

    echo '<p>Abaixo terá as constantes sendo chamadas:</p>';
    echo DB_USER . '<br />';
    echo DB_PASSWORD . '<br />';
    echo DB_ACCESS . '<br />';
    echo '<p>Fim da chamada das constantes.</p>';

    // If/Else (Condições)
    $idade1 = 20;
    $idade2 = 18;

    if ($idade1 > $idade2) {
        echo 'Idade 1 é maior que idade 2';
    } else {
        echo 'Idade 2 é menor que idade 1';
    };

    ?>

</body>

</html>