<?php

namespace EnclosureRelatedClasses;


class SavannaEnclosure extends Enclosure
{

    public function description(): string
    {
        return "A large open enclosure {$this->area} large for animals like lions and giraffes.";
    }
}