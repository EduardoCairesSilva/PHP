<?php

    $users = [
        ['nome' => 'José', 'idade' => 43],
        ['nome' => 'Maria', 'idade' => 21],
        ['nome' => 'Eduardo', 'idade' => 19],
    ];

    header('content-type: application/json');

    echo json_encode($users);

?>
