<?php

namespace EnclosureRelatedClasses;

class ReptileHouse extends Enclosure
{

    public function description(): string
    {
        return "A warm and humid {$this->name} {$this->area} for reptiles.";
    }
}