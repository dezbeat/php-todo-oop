<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Services\TodoManager;

echo '<h1>Todo</h1>';

try {
    $todoManager = new TodoManager();

    $todoManager->add('Task 1', "Description 1");
    $todoManager->add('Task 2', "Description 2");

    $tasks = $todoManager->getTasks();

    foreach ($tasks as $task) {
        echo "#" . $task->id . " (" . $task->createdAt->format('Y-m-d H:i:s') . "): " . $task->title . ": " . $task->description;
        echo "<br/>";
    }
} catch (\InvalidArgumentException $e) {
    echo 'ERROR: ' . $e->getMessage() . '';
}
