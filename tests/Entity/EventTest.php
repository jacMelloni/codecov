<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use \App\Entity\Event;

final class EventTest extends TestCase
{
    public function testConstructor(): void
    {
        $event = new Event('testEvent');

        $this->assertInstanceOf(
            Event::class,
            $event
        );

        $this->assertEquals('testEvent', $event->getName());
        $this->assertEquals(0, $event->getNumberOfPartecipants());
    }

    public function testSubscribe(): void
    {
        $user = new \App\Entity\User('name', 'mail');
        $event = new Event('testEvent');

        $this->assertEquals(true, $event->subscribe($user));
    }
}

