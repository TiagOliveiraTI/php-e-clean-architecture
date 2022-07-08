<?php

namespace spec\Tiagoliveirati\CleanArch\Domain;

use PhpSpec\ObjectBehavior;
use Tiagoliveirati\CleanArch\Domain\Email;

class EmailSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith('valid_email@email.com');
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(Email::class);
    }

    public function it_should_be_a_valid_email()
    {
        $this->getEmail()->shouldReturn('valid_email@email.com');
    }

    public function it_should_throw_an_exception_if_email_is_invalid()
    {
        $this->beConstructedWith('invalid_email');
        $this->shouldThrow(\InvalidArgumentException::class)->duringInstantiation();
    }
}
