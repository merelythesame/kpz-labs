<?php
require_once 'autoload.php';

use AnimalRelatedClasses\Memal;
use AnimalRelatedClasses\Reptile;
use EmployeeRelatedClasses\TourGuide;
use EmployeeRelatedClasses\Veterinarian;
use EnclosureRelatedClasses\ReptileHouse;
use ZooManagmentClasses\AnimalManager;
use ZooManagmentClasses\Zoo;
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

$employeeManager = new EmployeeManager($employeeRepo);
$enclosureManager = new EnclosureManager($enclosureRepo);
$animalManager = new AnimalManager($animalRepo);

$zoo = new Zoo("Central Park", "New York", $animalManager ,$employeeManager, $enclosureManager);

$aquarium = new Aquarium("Ocean World", "1000 sq ft", new AnimalManager(new AnimalRepository()));
$savanna = new SavannaEnclosure("Lion Habitat", "5000 sq ft", new AnimalManager(new AnimalRepository()));
$reptileHouse = new ReptileHouse("Herpetarium", "2000 sq ft", new AnimalManager(new AnimalRepository()));

$zoo->enclosureManager->addEnclosure($aquarium);
$zoo->enclosureManager->addEnclosure($savanna);
$zoo->enclosureManager->addEnclosure($reptileHouse);

$bird = new Bird("Kevin", "Canary");
$fish = new Fish("Nemo", "Clownfish");
$lion = new Memal("Alex", "African lion");
$crocodile = new Reptile("Roger", "American Alligator");

$zoo->animalManager->addAnimal($bird);
$zoo->animalManager->addAnimal($crocodile);
$zoo->animalManager->addAnimal($fish);
$zoo->animalManager->addAnimal($lion);

$aquarium->addAnimal($fish);
$savanna->addAnimal($lion);
$reptileHouse->addAnimal($crocodile);
$savanna->addAnimal($bird);

$zookeeper = new Employee("John", "Doe", 35, 4000.00, new Zookeeper());
$veterinarian = new Employee("John", "Doe", 35, 5000, new Veterinarian());
$tourGuide = new Employee("Alice", "Smith", 28, 4000, new TourGuide());

$zoo->employeeManager->hireEmployee($veterinarian);
$zoo->employeeManager->hireEmployee($tourGuide);
$zoo->employeeManager->hireEmployee($zookeeper);

echo "<h3>{$zoo->description()}</h3>";

echo "<h3>Animals in the Zoo:</h3>";
foreach ($zoo->animalManager->listAnimals() as $animal) {
    echo "<br>- $animal->species {$animal->makeSound()}";
    if ($animal instanceof  Bird)
        echo "<br>&nbsp;&nbsp;- {$animal->fly()}";
    if ($animal instanceof  Fish)
        echo "<br>&nbsp;&nbsp;- {$animal->swim()}";

}

echo "<h3>Employees in the Zoo:\n</h3>";
foreach ($zoo->employeeManager->listEmployees() as $employee) {
    echo "<br>- {$employee->name} ({$employee->work()})";
}

echo "<h3>Enclosures in the Zoo:</h3>";
foreach ($zoo->enclosureManager->listEnclosures() as $enclosure) {
    echo "<b>{$enclosure->name}:</b> {$enclosure->description()}<br>";
    echo "Animals inside: " . ($enclosure->listAnimals() ?: "No animals") . "<br><br>";
}

