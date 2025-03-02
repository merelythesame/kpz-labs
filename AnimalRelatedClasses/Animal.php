<?php

namespace AnimalRelatedClasses;

abstract class Animal {
    protected $name;
    protected $species;

    function __construct($name, $species) {
        $this->name = $name;
        $this->species = $species;
    }

    public abstract function makeSound(): string;

}
