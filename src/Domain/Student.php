<?php

declare(strict_types=1);

namespace Tiagoliveirati\CleanArch\Domain;

class Student
{
    public function __construct(
        private string $cpf,
        private string $name,
        private Email $email
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email->getEmail();
    }

    public function cpf()
    {
        return $this->cpf;
    }
}
