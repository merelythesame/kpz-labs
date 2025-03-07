<?php

namespace ZooManagmentClasses;

class Zoo
{
    public AnimalManager $animalManager;
    public EmployeeManager $employeeManager;
    public EnclosureManager $enclosureManager;

    public function __construct(
        AnimalManager $animalManager,
        EmployeeManager $employeeManager,
        EnclosureManager $enclosureManager
    ) {
        $this->animalManager = $animalManager;
        $this->employeeManager = $employeeManager;
        $this->enclosureManager = $enclosureManager;
    }
}