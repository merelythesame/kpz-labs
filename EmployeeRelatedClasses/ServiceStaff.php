<?php

namespace EmployeeRelatedClasses;

class ServiceStaff implements IJob
{

    public function work(): string
    {
        return "Handles tickets, customer service, and visitor assistance.";
    }
}