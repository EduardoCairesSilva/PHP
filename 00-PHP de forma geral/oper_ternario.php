<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores ternarios</title>
</head>

<body>

    <?php

    $card_user = true;
    $shop_value = 200;

    $shipping_value = 50;

    $shipping_value_aux = $card_user && $shop_value >= 400 ? 0 : ($card_user && $shop_value >= 300 ? 10 : ($card_user && $shop_value >= 100 ? 25 : $shipping_value));

    $have_discount = $shipping_value != $shipping_value_aux ? true : false;

    $shipping_value = $shipping_value_aux;

    ?>

    <h1>E-commerce</h1>

    <p>Possui cartão da loja? <?= $card_user ? 'SIM' : 'NÃO'; ?>
        <!-- <condição> ? true : false -->
    </p>

    <p>Valor da compra: <?= $shop_value ?> </p>

    <p>Recebeu desconto? <?= $have_discount ? 'SIM' : 'NÃO' ?></p>

    <p>Valor do frete: <?= $shipping_value ?> </p>

</body>

</html>