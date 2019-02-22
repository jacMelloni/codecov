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

    public function subscribe(User $user): void
    {
        $this->partecipants[] = $user;
    }

    public function getNumberOfPartecipants(): int
    {
        return count($this->partecipants);
    }
}