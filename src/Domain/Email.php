<?php

declare(strict_types=1);

namespace Tiagoliveirati\CleanArch\Domain;

class Email
{
    public function __construct(private string $email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException('Invalid email');
        }
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
