<?php

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
file_put_contents('todos.json', $jsonTodo);

echo "File created!";