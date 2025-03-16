<?php

namespace AbstractFactory;

use AbstractFactory\ConcreteDevices\XiaomiLaptop;
use AbstractFactory\ConcreteDevices\XiaomiSmartphone;
use AbstractFactory\ConcreteDevices\XiaomiTablet;
use AbstractFactory\Enums\GPU;
use AbstractFactory\Enums\Keybord;
use AbstractFactory\Enums\NumberOfSIM;

class XiaomiFactory implements Factory
{
    public function createLaptop(): XiaomiLaptop
    {
        return new XiaomiLaptop(
            "Intel Core i9", 32, 1024, 15.6, 12000, "Black",
            Keybord::Mechanical, GPU::Discrete,
            true, 1899.99, "Windows 11", "Xiaomi Mi Notebook Pro",
            true, true
        );
    }

    public function createTablet(): XiaomiTablet
    {
        return new XiaomiTablet(
            "Snapdragon 8 Gen 2", 12, 512, 12.4, 10000, "Dark Gray",
            true, true, true,
            799.99, "MIUI for Pad", "Xiaomi Pad 6 Pro"
        );
    }

    public function createSmartphone(): XiaomiSmartphone
    {
        return new XiaomiSmartphone(
            "Snapdragon 8 Gen 3", 16, 1024, 6.9, 5000, "Carbon Black",
            NumberOfSIM::Two, 120, 4, "MIUI 14", "Xiaomi 13 Ultra",
            1299.99, true, true
        );
    }
}