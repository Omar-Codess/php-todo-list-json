<?php

$string = file_get_contents("todo.json");
$todos = json_decode($string, true);


if (isset($_POST["newTodo"])) {
    $new_todo = $_POST["newTodo"];
    $todos[] = [
        "text" => $_POST["newTodo"],
        "done" => false
    ];
    file_put_contents("todo.json", json_encode($todos));
}


header("Content-Type: application/json");
echo json_encode($todos);
