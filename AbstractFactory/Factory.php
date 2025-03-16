<?php

namespace AbstractFactory;

use AbstractFactory\AbstractDevices\Laptop;
use AbstractFactory\AbstractDevices\Smartphone;
use AbstractFactory\AbstractDevices\Tablet;

interface Factory
{
    public function createLaptop(): Laptop;
    public function createTablet(): Tablet;
    public function createSmartphone(): Smartphone;

}