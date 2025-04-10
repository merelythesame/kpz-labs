<?php

namespace Decorator;

class Paladin extends Hero implements HeroInterface
{
    public function __construct(string $name, int $health, int $attack, int $defense)
    {
        parent::__construct($name, $health, $attack, $defense);
    }

    public function getDescription(): string
    {
        return "
        Paladin named $this->name<br>
        Health $this->health<br>
        Attack $this->attack<br>
        Defense $this->defense<br>
        ";
    }

}