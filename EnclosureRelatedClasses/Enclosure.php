<?php

namespace EnclosureRelatedClasses;

abstract class Enclosure
{
    public string $name;
    public string $area;
    public array $animals = [];

    public function __construct(string $name, string $area){
        $this->name = $name;
        $this->area = $area;
    }

    public function addAnimal($animal): void {
        $this->animals = $animal;
    }

    public function findAnimalByName(string $name) {
        foreach ($this->animals as $animal) {
            if ($animal->name === $name) {
                return $animal;
            }
        }
        return NULL;
    }

    public function listAnimals(): array {
        return $this->animals;
    }

    abstract public function description(): string;
}