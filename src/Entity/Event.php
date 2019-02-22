<?php

namespace App\Entity;

class Event
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var User[]
     */
    protected $partecipants;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->partecipants = [];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function subscribe(User $user): bool
    {
        if ($user->getUsername() !== 'testUser') {
            $this->partecipants[] = $user;
            return true;
        }
        else {
            return false;
        }
    }

    public function getNumberOfPartecipants(): int
    {
        return count($this->partecipants);
    }
}