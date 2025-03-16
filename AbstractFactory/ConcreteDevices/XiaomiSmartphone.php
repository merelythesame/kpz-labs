<?php

namespace AbstractFactory\ConcreteDevices;

use AbstractFactory\AbstractDevices\Smartphone;
use AbstractFactory\Enums\NumberOfSIM;

class XiaomiSmartphone extends Smartphone
{
    protected bool $hasInfraredPort;
    protected bool $hasHyperCharge;

    public function __construct(string $processor, int $ram, int $storage,
                                float $diagonal, int $battery, string $color,
                                NumberOfSIM $SIM, int $chargeSpeed, int $numberOfCameras,
                                string $OS, string $model, float $price,
                                bool $hasInfraredPort, bool $hasHyperCharge)
    {
        parent::__construct($processor, $ram, $storage, $diagonal, $battery, $color, $SIM, $chargeSpeed, $numberOfCameras, $OS, $model, $price);
        $this->hasInfraredPort = $hasInfraredPort;
        $this->hasHyperCharge = $hasHyperCharge;
    }

    public function getInfo(): string
    {
        return "Xiaomi Smartphone - Model: {$this->model}, Processor: {$this->processor}, RAM: {$this->ram}GB, Storage: {$this->storage}GB, " .
            "Screen: {$this->diagonal}\", Battery: {$this->battery}mAh, Color: {$this->color}, OS: {$this->OS}, Price: \${$this->price}, " .
            "Infrared Port: " . ($this->hasInfraredPort ? "Yes" : "No") . ", HyperCharge: " . ($this->hasHyperCharge ? "Yes" : "No");
    }
}