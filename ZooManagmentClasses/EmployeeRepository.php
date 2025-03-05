<?php

namespace ZooManagmentClasses;

use EmployeeRelatedClasses\Employee;

class EmployeeRepository implements IRepository
{
    private array $employees = [];

    public function add(object $entity): void
    {
        $this->employees[] = $entity;
    }

    public function findByName(string $name): ?object
    {
        return array_find($this->employees, fn($employee) => $employee->name === $name);
    }

    public function remove(string $name): void
    {
        $employee = $this->findByName($name);
        unset($employee);
    }

    public function getAll(): array
    {
        return $this->employees;
    }
}