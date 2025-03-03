<?php

namespace EnclosureRelatedClasses;

class Aquarium extends Enclosure
{

    public function description(): string
    {
        return "An aquarium {$this->area} large that houses aquatic animals.";
    }
}