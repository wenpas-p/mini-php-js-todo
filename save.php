<?php
header('Content-Type: application/json');

$file = 'todos.json';
$todos = [];

if (file_exists($file)) {
    $todos = json_decode(file_get_contents($file), true);
}

if (isset($_POST['todo']) && trim($_POST['todo']) !== '') {
    $todos[] = $_POST['todo'];
    file_put_contents($file, json_encode($todos, JSON_PRETTY_PRINT));
}

echo json_encode($todos);
?>
