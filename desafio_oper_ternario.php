<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
</head>

<body>

    <?php
    $idade = 69;
    $peso = 50;
    $validacao_doar_sangue = $idade >= 16 && $idade <= 69 && $peso >= 50 ? 'Atende aos requisitos' : 'Não atende aos requisitos';
    ?>
    <h1>Doar sangue</h1>
    <p><?= $validacao_doar_sangue ?></p>

</body>

</html>