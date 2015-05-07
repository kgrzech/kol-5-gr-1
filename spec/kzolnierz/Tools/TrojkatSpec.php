<?php

namespace spec\kzolnierz\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TrojkatSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kzolnierz\Tools\Trojkat');
    }
    
    function it_should_have_setter_and_gettter()
    {
        $this->setA(5.0)->getA()->shouldReturn(5.0);
        $this->setB(2.0)->getB()->shouldReturn(2.0);
    }
    
    function it_should_calculate_triangle()
{
    $this->setA(5.0)->setB(2.0)->triangle()->shouldReturn(5.0);
}
}
