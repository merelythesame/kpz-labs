<?php

namespace EmployeeRelatedClasses;

class Employee
{
    protected string $name;
    protected string $lastname;
    protected int $age;
    protected float $salary;

    protected IJob $position;

    public function __construct(string $name, string $lastname, int $age, float $salary, IJob $position){
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->salary = $salary;
        $this->position = $position;
    }

    public function work(): string{
        $this->position->work();
    }

}