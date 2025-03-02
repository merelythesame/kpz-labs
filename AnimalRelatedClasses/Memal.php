<?php

namespace AnimalRelatedClasses;

class Memal extends Animal
{
    public function makeSound(): string
    {
        return "{$this->name} sounds like {$this->species}";
    }
}