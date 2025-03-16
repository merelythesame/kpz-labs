<?php

namespace AbstractFactory\AbstractDevices;

use AbstractFactory\Enums\NumberOfSIM;

abstract class Smartphone extends Device
{
    protected NumberOfSIM $SIM;
    protected int $chargeSpeed;
    protected int $numberOfCameras;

    public function __construct(string $processor, int $ram, int $storage, float $diagonal, int $battery, string $color,
    NumberOfSIM $SIM, int $chargeSpeed, int $numberOfCameras, string $OS,string $model, float $price){
        parent::__construct($processor, $ram, $storage, $diagonal, $battery, $color, $OS, $model, $price);
        $this->SIM = $SIM;
        $this->chargeSpeed = $chargeSpeed;
        $this->numberOfCameras = $numberOfCameras;
    }

    public abstract function getInfo(): string;

}