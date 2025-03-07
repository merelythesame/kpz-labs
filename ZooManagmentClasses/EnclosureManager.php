<?php

namespace ZooManagmentClasses;

use EnclosureRelatedClasses\Enclosure;

class EnclosureManager
{
    private IRepository $repository;

    public function __construct(IRepository $repository){
        $this->repository = $repository;
    }

    public function findEnclosureByName(string $name): object
    {
        return $this->repository->findByName($name);
    }

    public function addEnclosure(Enclosure $enclosure): void {
        $this->repository->add($enclosure);
    }

    public function removeEnclosure(string $name): void {
        $this->repository->remove($name);
    }

    public function listEnclosures(): array {
        return $this->repository->getAll();
    }


}