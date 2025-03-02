<?php

namespace AnimalRelatedClasses;

class Bird extends Animal implements IFlyable
{
    public function makeSound(): string
    {
        return "{$this->name} chirping";
    }

    public function fly(): string
    {
        return "{$this->name} is flying!";
    }
}