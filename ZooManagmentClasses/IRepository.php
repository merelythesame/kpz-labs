<?php

namespace ZooManagmentClasses;

use EmployeeRelatedClasses\Employee;

interface IRepository {
    public function add(object $entity): void;
    public function findByName(string $name): ?object;
    public function remove(string $name): void;
    public function getAll(): array;
}