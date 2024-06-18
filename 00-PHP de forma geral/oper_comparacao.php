<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de comparação if e else</title>
</head>

<body>

    <?php 

    // ==
    echo 'Utilizando o operador de comparação == <br>';
    if (2 == '2') {
        echo '<strong>Verdadeiro</strong>';
    } else {
        echo 'Falso';
    };
    echo '<br> <br>';
    echo 'Utilizando o operador de igualdade === <br>';
    // ===
    if (2 === '2') {
        echo 'Verdadeiro';
    } else {
        echo '<strong>Falso</strong>';
    };
    echo '<br> <br>';
    echo 'Utilizando o operador de diferente != ou <> <br>';
    // != ou <>
    if (2 != 3) {
        echo '<strong>Verdadeiro</strong>';
    } else {
        echo 'Falso';
    };
    echo '<br> <br>';
    echo 'Utilizando o operador de nao identico !== <br>';
    // !==
    if (2 !== '2') {
        echo '<strong>Verdadeiro</strong>';
    } else {
        echo 'Falso';
    };
    echo '<br> <br>';
    echo 'Utilizando o operador de menor < <br>';
    // <
    if (10 < 5) {
        echo 'Verdadeiro';
    } else {
        echo '<strong>Falso</strong>';
    };
    echo '<br> <br>';
    echo 'Utilizando o operador de maior > <br>';
    // <
    if (10 > 5) {
        echo '<strong>Verdadeiro</strong>';
    } else {
        echo 'Falso';
    };
    echo '<br> <br>';
    echo 'Utilizando o operador de maior <= ou >= <br>';
    // <
    if (10 <= 10) {
        echo '10 <= 10?: <strong>Verdadeiro</strong>';
    } else {
        echo 'Falso';
    };
    echo '<br> <br>';
    if (10 >= 10) {
        echo '10 >= 10?: <strong>Verdadeiro</strong>';
    } else {
        echo 'Falso';
    };


    ?>

</body>

</html>