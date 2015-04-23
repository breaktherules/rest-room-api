<?php

namespace spec\Reservation\Service;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GuestSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Reservation\Service\Guest');
    }
}
