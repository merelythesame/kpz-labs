<?php

namespace Decorator;

class Hero
{
    protected string $name;
    protected int $health;
    protected int $attack;
    protected int $defense;

    function __construct(string $name, int $health, int $attack, int $defense)
    {
        $this->name = $name;
        $this->health = $health;
        $this->attack = $attack;
        $this->defense = $defense;
    }

}