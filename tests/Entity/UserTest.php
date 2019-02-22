<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use \App\Entity\User;

final class UserTest extends TestCase
{
    public function testConstructor(): void
    {
        $userInstance = new User('testUser', 'test@test.com');

        $this->assertInstanceOf(
            User::class,
            $userInstance
        );

        $this->assertEquals('testUser', $userInstance->getUsername());
        $this->assertEquals('test@test.com', $userInstance->getEmail());
    }

    public function testAddPoitns(): void
    {
        $userInstance = new User('testUser', 'test@test.com');

        $this->assertEquals(0, $userInstance->getPoints());

        $userInstance->addPoints(5);
        $this->assertEquals(5, $userInstance->getPoints());
    }
}

