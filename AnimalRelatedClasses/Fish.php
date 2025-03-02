<?php

namespace AnimalRelatedClasses;

class Fish extends Animal implements ISwimable
{
    public function makeSound(): string
    {
        return "{$this->name} doesn`t make any sound";
    }

    public function swim(): string
    {
        return "{$this->name} is swimming!";
    }
}