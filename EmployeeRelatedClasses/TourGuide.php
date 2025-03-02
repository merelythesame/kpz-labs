<?php

namespace EmployeeRelatedClasses;

class TourGuide implements IJob
{

    public function work(): string
    {
        return "Educates visitors, leads tours, and shares zoo information.";
    }
}