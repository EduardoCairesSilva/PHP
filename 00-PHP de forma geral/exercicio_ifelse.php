<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio ECOMMERCE</title>
</head>

<body>

    <?php

    $card_user = true;
    $shop_value = 300;

    $shipping_value = 50;
    $have_discount = false;

    if ($card_user && $shop_value >= 100) {
        $shipping_value = 0;
        $have_discount = true;
    };

    ?>

    <h1>E-commerce</h1>

    <p>Possui cartão da loja?
        <?php
            if ($card_user) {
                echo 'SIM';
            } else {
                echo 'NÃO';
            };
        ?>
    </p>

    <p>Valor da compra: <?= $shop_value ?> </p>

    <p>Recebeu desconto? 
        <?php
            if ($have_discount === true) {
                echo 'SIM';
            } else {
                echo 'NÃO';
            };
        ?>
    </p>

    <p>Valor do frete: <?= $shipping_value ?> </p>

</body>

</html>