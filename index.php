<?php
require_once 'autoload.php';

use ZooManagmentClasses\Zoo;
use ZooManagmentClasses\AnimalManager;
use ZooManagmentClasses\EmployeeManager;
use ZooManagmentClasses\EnclosureManager;
use ZooManagmentClasses\AnimalRepository;
use ZooManagmentClasses\EmployeeRepository;
use ZooManagmentClasses\EnclosureRepository;
use AnimalRelatedClasses\Bird;
use AnimalRelatedClasses\Fish;
use EmployeeRelatedClasses\Employee;
use EmployeeRelatedClasses\Zookeeper;
use EnclosureRelatedClasses\Aquarium;
use EnclosureRelatedClasses\SavannaEnclosure;

$animalRepo = new AnimalRepository();
$employeeRepo = new EmployeeRepository();
$enclosureRepo = new EnclosureRepository();

$animalManager = new AnimalManager($animalRepo);
$employeeManager = new EmployeeManager($employeeRepo);
$enclosureManager = new EnclosureManager($enclosureRepo);

$zoo = new Zoo($animalManager, $employeeManager, $enclosureManager);

$bird = new Bird("Tweety", "Canary");
$fish = new Fish("Nemo", "Clownfish");

$zoo->animalManager->addAnimal($bird);
$zoo->animalManager->addAnimal($fish);

$zookeeper = new Employee("John", "Doe", 35, 4000.00, new Zookeeper());
$zoo->employeeManager->hireEmployee($zookeeper);

$aquarium = new Aquarium("Ocean World", "1000 sq ft");
$savanna = new SavannaEnclosure("Lion Habitat", "5000 sq ft");

$zoo->enclosureManager->addEnclosure($aquarium);
$zoo->enclosureManager->addEnclosure($savanna);

echo "Animals in the Zoo:\n";
foreach ($zoo->animalManager->listAnimals() as $animal) {
    echo "- {$animal->makeSound()}<br>";
}

echo "\nEmployees in the Zoo:\n";
foreach ($zoo->employeeManager->listEmployees() as $employee) {
    echo "- {$employee->name} ({$employee->work()})<br>";
}

echo "\nEnclosures in the Zoo:\n";
foreach ($zoo->enclosureManager->listEnclosures() as $enclosure) {
    echo "- {$enclosure->description()}<br>";
}

