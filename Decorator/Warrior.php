<?php

namespace Decorator;

class Warrior extends Hero implements HeroInterface
{
    public function __construct(string $name, int $health, int $attack, int $defense) {
        parent::__construct($name, $health, $attack, $defense);
    }

    public function getDescription(): string
    {
        return "<br>
        Warrior named $this->name<br>
        Health $this->health<br>
        Attack $this->attack<br>
        Defense $this->defense<br>
        ";
    }
}