<?php

$string = file_get_contents("todo.json");
$todos = json_decode($string, true);
