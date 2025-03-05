<?php

namespace ZooManagmentClasses;

class EnclosureRepository implements IRepository
{
    private array $enclosures = [];

    public function add(object $entity): void
    {
        $this->enclosures[] = $entity;
    }

    public function findByName(string $name): ?object
    {
        return array_find($this->enclosures, fn($employee) => $employee->name === $name);
    }

    public function remove(string $name): void
    {
        $enclosure = $this->findByName($name);
        unset($enclosure);
    }

    public function getAll(): array
    {
        return $this->enclosures;
    }
}