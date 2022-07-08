<?php

declare(strict_types=1);

namespace Tiagoliveirati\CleanArch\Domain;

class Student
{
    public function __construct(
        private string $name,
        private string $email
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
