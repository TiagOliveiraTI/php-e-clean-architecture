<?php

declare(strict_types=1);

namespace Tiagoliveirati\CleanArch\Domain;

class Student
{
    public function __construct(private string $name)
    {
    }

    public function getName()
    {
        return $this->name;
    }
}
