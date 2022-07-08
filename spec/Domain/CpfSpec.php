<?php

namespace spec\Tiagoliveirati\CleanArch\Domain;

use PhpSpec\ObjectBehavior;
use Tiagoliveirati\CleanArch\Domain\Cpf;

class CpfSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith('14538220620');
    }
    public function it_is_initializable()
    {
        $this->shouldHaveType(Cpf::class);
    }

    public function it_should_be_a_valid_cpf()
    {
        $this->isValid('145.382.206-20')->shouldReturn(true);
    }

    public function it_should_be_an_invalid_cpf()
    {
        $this->isValid('145.382.206-21')->shouldReturn(false);
    }

    public function it_should_returns_a_cpf()
    {
        $this->getCpf()->shouldReturn('14538220620');
    }

    public function it_should_throw_an_exception_when_invalid_cpf()
    {
        $this->shouldThrow('\InvalidArgumentException')->during('__construct', ['145.382.206-21']);
    }
}
