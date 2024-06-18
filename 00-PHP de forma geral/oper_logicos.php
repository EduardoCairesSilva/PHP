<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores lógicos</title>
</head>

<body>

    <?php

    // Operadores lógicos
    // E: && ou AND -> Retorna verdadeiro apenas se todos os resultados forem verdadeiros.
    echo '5 é igual a 5 E 6 é maior que 3? <br>';
    if (5 === 5 && 6 > 3) {
        echo '<strong>Verdadeiro</strong>';
    } else {
        echo 'False';
    };
    echo '<br><br>';
    echo '5 é igual a 9 E 6 é maior que 3? <br>';
    if (5 === 9 && 6 > 3) {
        echo 'Verdadeiro';
    } else {
        echo '<strong>False</strong>';
    };
    echo '<br><br>';
    // Ou: || ou OR -> Retorna verdadeiro apenas se um dos resultados forem verdadeiros.
    echo '5 é igual a 9 OU 6 é maior que 3? <br>';
    if (5 === 5 || 6 > 3) {
        echo '<strong>Verdadeiro</strong>';
    } else {
        echo 'False';
    };
    echo '<br><br>';
    echo '5 é igual a 9 OU 6 é menor que 3? <br>';
    if (5 === 9 || 6 < 3) {
        echo 'Verdadeiro';
    } else {
        echo '<strong>False</strong>';
    };
    echo '<br><br>';
    // XOR: XOR -> Retorna verdadeiro apenas se uma das expressões for verdadeira e a outra falsa, ou vice-versa.
    echo '5 é igual a 5 XOR 6 é menor que 3? <br>';
    if (5 === 5 XOR 6 < 3) {
        echo '<strong>Verdadeiro</strong>';
    } else {
        echo 'False';
    };
    echo '<br><br>';
    echo '5 é igual a 5 XOR 6 é maior que 3? <br>';
    if (5 === 5 XOR 6 > 3) {
        echo 'Verdadeiro';
    } else {
        echo '<strong>False</strong>';
    };
    echo '<br><br>';
    // !: Negação -> Inverte o resultado retornado pela expressão.
    echo '5 é igual a 5 XOR 6 é menor que 3? <br>';
    if (!(5 === 5 XOR 6 < 3)) {
        echo 'Verdadeiro';
    } else {
        echo '<strong>False</strong>';
    };
    echo '<br><br>';
    echo '5 é igual a 5 XOR 6 é maior que 3? <br>';
    if (!(5 === 5 XOR 6 > 3)) {
        echo '<strong>Verdadeiro</strong>';
    } else {
        echo 'False';
    };
    ?>

</body>

</html>