<?php


$task = new Task();
$result =  $task->delete($_GET['id']);


if ($result) {
    header('Location: index.php');
}
