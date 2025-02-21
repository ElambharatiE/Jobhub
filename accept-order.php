<?php
$username = $_GET['id'];
$tasksJson = json_decode(file_get_contents("my-tasks.json"), true);
$user = $tasksJson[$username];
$user['type'] = 'processing';
$tasksJson[$username] = $user;
file_put_contents("my-tasks.json", json_encode($tasksJson, JSON_PRETTY_PRINT));


// <?php
// $username = $_GET['id'];
// $tasksJson = json_decode(file_get_contents("my-task.json"), 1);
// $user = $tasksJson[$username];
// $user['type'] = 'processing';
// $tasksJson[$username] = $user;
// file_put_contents("my-tasks.json", json_encode($tasksJson, JSON_PRETTY_PRINT));