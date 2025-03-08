<?php

namespace EnclosureRelatedClasses;


class SavannaEnclosure extends Enclosure
{

    public function description(): string
    {
        return "{$this->name} {$this->area} for memals and birds .";
    }
}