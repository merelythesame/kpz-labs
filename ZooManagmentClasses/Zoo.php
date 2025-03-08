<?php

namespace ZooManagmentClasses;

class Zoo
{
    public string $name;
    public string $location;
    public AnimalManager $animalManager;
    public EmployeeManager $employeeManager;
    public EnclosureManager $enclosureManager;

    public function __construct(string $name, string $location, AnimalManager $animalManager,EmployeeManager $employeeManager, EnclosureManager $enclosureManager
    ) {
        $this->name = $name;
        $this->location = $location;
        $this->animalManager = $animalManager;
        $this->employeeManager = $employeeManager;
        $this->enclosureManager = $enclosureManager;
    }

    public function description(): string{
        return "{$this->name} zoo in {$this->location}";
    }
}