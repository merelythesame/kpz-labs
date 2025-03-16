<?php

namespace AbstractFactory;

use AbstractFactory\ConcreteDevices\AppleLaptop;
use AbstractFactory\ConcreteDevices\AppleSmartphone;
use AbstractFactory\ConcreteDevices\AppleTablet;
use AbstractFactory\Enums\GPU;
use AbstractFactory\Enums\Keybord;
use AbstractFactory\Enums\NumberOfSIM;

class AppleFactory implements Factory
{
    public function createLaptop(): AppleLaptop
    {
        return new AppleLaptop(
            "M3 Pro", 16, 512, 14.2, 10000, "Silver",
            Keybord::Membrane, GPU::Embedded,
            true, 2499.99, "macOS", "MacBook Pro 14",
            true, true
        );
    }

    public function createTablet(): AppleTablet
    {
        return new AppleTablet(
            "M2", 8, 256, 12.9, 9000, "Space Gray",
            true, false, true,
            1399.99, "iPadOS", "iPad Pro 12.9"
        );
    }

    public function createSmartphone(): AppleSmartphone
    {
        return new AppleSmartphone(
            "A17 Bionic", 8, 512, 6.7, 4350, "Deep Purple",
            NumberOfSIM::eSIM, 25, 3, "iOS", "iPhone 15 Pro Max",
            1599.99, true, true
        );
    }
}
