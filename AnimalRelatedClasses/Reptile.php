<?php

namespace AnimalRelatedClasses;

class Reptile extends Animal
{

    public function makeSound(): string
    {
        return "{$this->name} hisses";
    }
}