<?php

namespace ZooManagmentClasses;

use EmployeeRelatedClasses\Employee;
use EmployeeRelatedClasses\IJob;

class EmployeeManager
{
    private IRepository $repository;

    public function __construct(IRepository $repository) {
        $this->repository = $repository;
    }

    public function hireEmployee(Employee $employee): void {
        $this->repository->add($employee);
    }

    public function fireEmployee(string $name): void {
        $this->repository->remove($name);
    }

    public function updateSalary(string $name, float $salary): void {
        $employee = $this->repository->findByName($name);
        if ($employee) {
            $employee->salary = $salary;
        }
    }

    public function updatePosition(string $name, IJob $position): void {
        $employee = $this->repository->findByName($name);
        if ($employee) {
            $employee->position = $position;
        }
    }

    public function listEmployees(): array {
        return $this->repository->getAll();
    }
}