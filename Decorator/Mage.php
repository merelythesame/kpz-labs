<?php

namespace Decorator;

class Mage extends Hero implements HeroInterface
{
    public function __construct(string $name, int $health, int $attack, int $defense)
    {
        parent::__construct($name, $health, $attack, $defense);
    }

    public function getDescription(): string
    {
        return "
        Mage named $this->name<br>
        Health $this->health<br>
        Attack $this->attack<br>
        Defense $this->defense<br>
        ";
    }
}