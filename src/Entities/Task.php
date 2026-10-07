<?php

declare(strict_types=1);

namespace App\Entities;

class Task
{
    public function __construct(
        public readonly int $id,
        public readonly string $title,
        public readonly string $description,
        public readonly \DateTimeImmutable $createdAt
    ) {}
}
