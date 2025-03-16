<?php

namespace AbstractFactory\AbstractDevices;

use AbstractFactory\Enums\GPU;
use AbstractFactory\Enums\Keybord;

abstract class Laptop extends Device
{
    protected Keybord $keyboard;
    protected GPU $gpu;
    protected bool $hasTouchPad = true;

    public function __construct(string $processor, int $ram, int $storage,
                                float $diagonal, int $battery, string $color,
                                Keybord $keyboard, GPU $gpu, bool $hasTouchPad,
                                string $OS, string $model, float $price){
        parent::__construct($processor, $ram, $storage, $diagonal, $battery, $color, $OS, $model, $price);
        $this->keyboard = $keyboard;
        $this->gpu = $gpu;
        $this->hasTouchPad = $hasTouchPad;
    }

    public abstract function getInfo(): string;
}