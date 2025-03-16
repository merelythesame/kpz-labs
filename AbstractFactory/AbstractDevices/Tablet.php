<?php

namespace AbstractFactory\AbstractDevices;

abstract class Tablet extends Device
{
    protected bool $hasExtraKeyboard = false;
    protected bool $canCall = false;

    public function __construct(string $processor, int $ram, int $storage, float $diagonal, int $battery, string $color,
    bool $hasExtraKeyboard, bool $canCall, string $OS, string $model, float $price)
    {
        parent::__construct($processor, $ram, $storage, $diagonal, $battery, $color, $OS, $model, $price);
        $this->hasExtraKeyboard = $hasExtraKeyboard;
        $this->canCall = $canCall;
    }

    public abstract function getInfo(): string;
}