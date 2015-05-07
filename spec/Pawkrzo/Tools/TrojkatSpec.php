<?php

namespace spec\Pawkrzo\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TrojkatSpec extends ObjectBehavior
{
    function it_should_have_setter_and_gettter()
    {
        $this->setA(5.0)->getA()->shouldReturn(5.0);
        $this->setH(2.0)->getH()->shouldReturn(2.0);
    }
    function it_should_calculate_triangle()
{
    $this->setA(5.0)->setH(2.0)->triangle()->shouldReturn(5.0);
}
}
