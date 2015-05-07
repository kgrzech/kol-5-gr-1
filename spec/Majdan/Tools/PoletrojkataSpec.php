<?php

namespace spec\Majdan\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PoletrojkataSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Majdan\Tools\Poletrojkata');
    }
}
