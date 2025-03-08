<?php

namespace EnclosureRelatedClasses;

class Aquarium extends Enclosure
{

    public function description(): string
    {
        return "{$this->name} {$this->area} houses aquatic animals.";
    }
}