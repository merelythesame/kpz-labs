<?php

namespace AbstractFactory\ConcreteDevices;

use AbstractFactory\AbstractDevices\Laptop;
use AbstractFactory\Enums\GPU;
use AbstractFactory\Enums\Keybord;

class XiaomiLaptop extends Laptop
{
    protected bool $hasMiShare;
    protected bool $hasHyperCharge;

    public function __construct(string $processor, int $ram, int $storage,
                                float $diagonal, int $battery, string $color,
                                Keybord $keybord, GPU $gpu, bool $hasTouchPad,
                                float $price, string $OS, string $model,
                                bool $hasMiShare, bool $hasHyperCharge)
    {
        parent::__construct($processor, $ram, $storage, $diagonal, $battery, $color, $keybord, $gpu, $hasTouchPad, $OS, $model, $price);
        $this->hasMiShare = $hasMiShare;
        $this->hasHyperCharge = $hasHyperCharge;
    }

    public function getInfo(): string
    {
        return "Xiaomi Laptop - Model: {$this->model}, Processor: {$this->processor}, RAM: {$this->ram}GB, Storage: {$this->storage}GB, " .
            "Screen: {$this->diagonal}\", Battery: {$this->battery}mAh, Color: {$this->color}, OS: {$this->OS}, Price: \${$this->price}, " .
            "MiShare: " . ($this->hasMiShare ? "Yes" : "No") . ", HyperCharge: " . ($this->hasHyperCharge ? "Yes" : "No");
    }
}