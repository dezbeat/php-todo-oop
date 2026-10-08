<?php

declare(strict_types=1);

namespace App\Services;

use App\Entities\Task;
use App\Interfaces\TodoManagerInterface;
use Override;

class TodoManager implements TodoManagerInterface
{
    private int $autoIncrementId = 0;
    /**
     * Массив объектов Task
     * @var Task[]
     */
    private array $tasks = [];
    public function add(string $title, string $description): Task
    {
        if (empty(trim($title))) {
            throw new \InvalidArgumentException('Title не может быть пустым');
        }

        if (empty(trim($description))) {
            throw new \InvalidArgumentException('Description не может быть пустым');
        }

        $this->autoIncrementId++;

        $task = new Task(
            $this->autoIncrementId,
            $title,
            $description,
            new \DateTimeImmutable(),
        );

        $this->tasks[$this->autoIncrementId] = $task;

        return $task;
    }

    public function getById(int $id): ?Task
    {
        return $this->tasks[$id] ?? null;
    }

    /**
     * Возвращает массив объектов Task
     * @return Task[]
     */
    public function getTasks(): array
    {
        return array_values($this->tasks);
    }
}
