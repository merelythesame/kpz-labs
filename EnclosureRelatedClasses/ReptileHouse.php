<?php

namespace EnclosureRelatedClasses;

class ReptileHouse extends Enclosure
{

    public function description(): string
    {
        return "A warm and humid space {$this->area} large for reptiles.";
    }
}