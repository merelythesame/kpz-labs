<?php

namespace ZooManagmentClasses;

class AnimalRepository implements IRepository
{
    private array $animals = [];

    public function add(object $entity): void {
        $this->animals[] = $entity;
    }

    public function findByName(string $name): ?object {
        foreach ($this->animals as $animal) {
            if ($animal->name === $name) {
                return $animal;
            }
        }
        return null;
    }

    public function remove(string $name): void {
        foreach ($this->animals as $key => $animal) {
            if ($animal->name === $name) {
                unset($this->animals[$key]);
            }
        }
    }

    public function getAll(): array {
        return $this->animals;
    }
}