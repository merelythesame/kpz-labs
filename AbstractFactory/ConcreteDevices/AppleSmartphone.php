<?php

namespace AbstractFactory\ConcreteDevices;

use AbstractFactory\AbstractDevices\Smartphone;
use AbstractFactory\Enums\NumberOfSIM;

class AppleSmartphone extends Smartphone
{
    protected bool $hasDinamicIsland;
    protected bool $hasApplePay;
    function __construct(string $processor, int $ram, int $storage,
                        float $diagonal, int $battery, string $color,
                        NumberOfSIM $SIM, int $chargeSpeed, int $numberOfCameras,
                        string $OS, string $model, float $price, bool $hasDinamicIsland, bool $hasApplePay,)
    {
        parent::__construct($processor, $ram, $storage, $diagonal, $battery, $color, $SIM, $chargeSpeed, $numberOfCameras, $OS, $model, $price);
        $this->hasDinamicIsland = $hasDinamicIsland;
        $this->hasApplePay = $hasApplePay;
    }

    public function getInfo(): string
    {
        return "Apple Smartphone - Model: {$this->model}, Processor: {$this->processor}, RAM: {$this->ram}GB, Storage: {$this->storage}GB, " .
            "Screen: {$this->diagonal}\", Battery: {$this->battery}mAh, Color: {$this->color}, OS: {$this->OS}, Price: \${$this->price}, " .
            "Dynamic Island: " . ($this->hasDinamicIsland ? "Yes" : "No") . ", Apple Pay: " . ($this->hasApplePay ? "Yes" : "No");
    }
}