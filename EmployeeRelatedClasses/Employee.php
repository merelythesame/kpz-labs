<?php

namespace EmployeeRelatedClasses;

class Employee
{
    public string $name;
    public string $lastname;
    public int $age;
    public float $salary;
    public IJob $position;

    public function __construct(string $name, string $lastname, int $age, float $salary, IJob $position)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->salary = $salary;
        $this->position = $position;
    }

    public function work(): string
    {
        return $this->position->work();
    }

}