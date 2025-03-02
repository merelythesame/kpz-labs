<?php

namespace EmployeeRelatedClasses;

class Zookeeper implements IJob
{

    public function work(): string
    {
        return "Cares for animals";
    }
}