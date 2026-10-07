<?php

declare(strict_types=1);

namespace App\Interfaces;

use App\Entities\Task;

interface TodoManagerInterface
{
    public function add(string $title, string $description): ?Task;

    /**
     * Возвращает массив объектов Task
     * @return Task[]
     * @throws \InvalidArgumentException Если данные невалидны
     */
    public function getTasks(): array;
}
