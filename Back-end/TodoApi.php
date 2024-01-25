<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Headers: X-Requested-With");
header("Access-Control-Allow-Origin: http://localhost:5173");

$todos = [
    [
        'task' => 'Fare la spesa',
    ],
    [
        'task' => 'Pulire casa',
    ],
    [
        'task' => 'Pagare bollette',
    ],
    [
        'task' => 'Portare il cane fuori',
    ],
    [
        'task' => 'Andare in palestra',
    ],
    [
        'task' => 'Leggere un libro',
    ],
];

$jsonTodo = json_encode($todos);
echo $jsonTodo;