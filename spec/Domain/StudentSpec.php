<?php

namespace spec\Tiagoliveirati\CleanArch\Domain;

use PhpSpec\ObjectBehavior;
use Tiagoliveirati\CleanArch\Domain\Student;

class StudentSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Student::class);
    }
}
