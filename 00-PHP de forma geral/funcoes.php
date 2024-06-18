<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio funções</title>
</head>

<body>

    <?php

    function calculoImposto($valor) {
        if ($valor <= 1903.98) {
           return $valor = 0; 
        } else if ($valor >= 1903.99 && $valor <= 2826.65) {
            return $valor * 0.075;
        } else if ($valor >= 2826.66 && $valor <= 3751.05) {
            return $valor * 0.15;
        } else if ($valor >= 3751.06 && $valor <= 4664.68) {
            return $valor * 0.225;
        } else {
            return $valor * 0.275;
        };
    };

    echo "O imposto de renda a ser pago será: " . (calculoImposto(900));
    echo "<br>";
    echo "O imposto de renda a ser pago será: " . (calculoImposto(2300));
    echo "<br>";
    echo "O imposto de renda a ser pago será: " . (calculoImposto(3754.65));
    echo "<br>";
    echo "O imposto de renda a ser pago será: " . (calculoImposto(4532.78));
    echo "<br>";
    echo "O imposto de renda a ser pago será: " . (calculoImposto(5222.67));

    ?>

</body>

</html>