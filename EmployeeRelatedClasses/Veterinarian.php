<?php

namespace EmployeeRelatedClasses;

class Veterinarian implements IJob
{

    public function work(): string
    {
        return "Provides medical care and treatment for animals.";
    }
}