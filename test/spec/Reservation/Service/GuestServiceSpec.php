<?php

namespace spec\Reservation\Service;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GuestServiceSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Reservation\Service\GuestService');
    }

    function it_returns_all_guests()
    {
        $this->getAll()->shouldHaveCount(20);
    }

    function it_throws_exception_for_non_existing_guest()
    {
        $this->shouldThrow('Reservation\Exception\GuestNotFound')->during('getOne', array(20000));
    }

    function it_returns_a_specific_guest()
    {
        /** @var \Reservation\Entity\Guest $guest */
        $guest = $this->getOne(2);
        $guest->shouldHaveType('Reservation\Entity\Guest');
        $guest->getId()->shouldBe(2);
    }

    function it_creates_a_guest()
    {
        /** @var \Reservation\Entity\Guest $guest */
        $guest = $this->createGuest('Name');
        $guest->shouldHaveType('Reservation\Entity\Guest');
        $guest->getName()->shouldBe('Name');
    }
}
