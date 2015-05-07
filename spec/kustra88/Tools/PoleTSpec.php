<?php

namespace spec\kustra88\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PoleTSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kustra88\Tools\PoleT');
    }
    function it_should_have_setter_and_gettter()
    {
    	$this->setA(2)->getA()->shouldReturn(2);
    	$this->setH(2)->getH()->shouldReturn(2);
    }
    function it_should_calculate_field_triangle()
    {
    	$this->setA(2)->setH(2)->triangle()->shouldReturn(2.0);
    }
}
