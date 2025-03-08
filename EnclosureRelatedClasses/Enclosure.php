<?php

namespace EnclosureRelatedClasses;

use AnimalRelatedClasses\Animal;
use ZooManagmentClasses\AnimalManager;
use ZooManagmentClasses\IRepository;

abstract class Enclosure
{
    public string $name;
    public string $area;
    private AnimalManager $animalManager;

    public function __construct(string $name, string $area, AnimalManager $animalManager){
        $this->name = $name;
        $this->area = $area;
        $this->animalManager = $animalManager;
    }

    public function addAnimal(Animal $animal): void {
        $this->animalManager->addAnimal($animal);
    }

    public function findAnimalByName(string $name): ?Animal {
        return $this->animalManager->findAnimalByName($name);
    }

    public function removeAnimal(string $name): void {
        $this->animalManager->removeAnimal($name);
    }

    public function listAnimals(): string {
        $animalNames = array_map(fn($animal) => $animal->name, $this->animalManager->listAnimals());
        return implode(", ", $animalNames);
    }

    public function countAnimals(): int {
        return count($this->animalManager->listAnimals());
    }

    abstract public function description(): string;
}
