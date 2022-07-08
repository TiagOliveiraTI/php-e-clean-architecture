<?php

namespace spec\Tiagoliveirati\CleanArch\Domain;

use PhpSpec\ObjectBehavior;
use Tiagoliveirati\CleanArch\Domain\Cpf;
use Tiagoliveirati\CleanArch\Domain\Student;
use Tiagoliveirati\CleanArch\Domain\Email;

class StudentSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith(new Cpf('01234567890'), 'any_name', new Email('valid_email@email.com'));  
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(Student::class);
    }

    public function it_should_have_a_cpf()
    {
        $this->cpf()->shouldReturn('01234567890');
    }

    public function it_should_have_a_name()
    {
        $this->getName()->shouldReturn('any_name');
    }

    public function it_should_be_a_valid_email()
    {
        $this->getEmail()->shouldReturn('valid_email@email.com');
    }
}
