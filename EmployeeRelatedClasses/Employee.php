<?php

namespace EmployeeRelatedClasses;

class Employee
{
    public string $name {
        get => $this->name;
    }
    protected string $lastname;
    protected int $age;
    public float $salary {
        get => $this->salary;
        set => $this->salary = $value;
    }

    public IJob $position {
        get => $this->position;

        set(IJob $value) {
            $this->position = $value;
        }
    }

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