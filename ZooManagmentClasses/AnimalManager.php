<?php

namespace ZooManagmentClasses;

use AnimalRelatedClasses\Animal;

class AnimalManager
{
    private IRepository $repository;

    public function __construct(IRepository $repository) {
        $this->repository = $repository;
    }

    public function addAnimal(Animal $animal): void {
        $this->repository->add($animal);
    }

    public function findAnimalByName(string $name): ?Animal {
        return $this->repository->findByName($name);
    }

    public function removeAnimal(string $name): void {
        $this->repository->remove($name);
    }

    public function listAnimals(): array {
        return $this->repository->getAll();
    }
}