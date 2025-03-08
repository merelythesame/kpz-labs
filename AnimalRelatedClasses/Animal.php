<?php

namespace AnimalRelatedClasses;

abstract class Animal
{
    public string $name;
    public string $species;

    function __construct($name, $species)
    {
        $this->name = $name;
        $this->species = $species;
    }

    public abstract function makeSound(): string;

}
