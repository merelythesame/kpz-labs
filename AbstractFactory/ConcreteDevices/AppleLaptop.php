<?php

namespace AbstractFactory\ConcreteDevices;

use AbstractFactory\AbstractDevices\Laptop;
use AbstractFactory\Enums\GPU;
use AbstractFactory\Enums\Keybord;

class AppleLaptop extends Laptop
{
    protected bool $hasFaceId;
    protected bool $hasAirDrop;

    public function __construct(string $processor, int $ram, int $storage,
                                float $diagonal, int $battery, string $color,
                                Keybord $keybord, GPU $gpu, bool $hasTouchPad,
                                float $price, string $OS, string $model,
                                bool $hasFaceId, bool $hasAirDrop)
    {
        parent::__construct($processor, $ram, $storage, $diagonal, $battery, $color, $keybord, $gpu, $hasTouchPad, $OS, $model, $price);
        $this->hasFaceId = $hasFaceId;
        $this->hasAirDrop = $hasAirDrop;

    }

    public function getInfo(): string
    {
        return "Apple Laptop - Model: {$this->model}, Processor: {$this->processor}, RAM: {$this->ram}GB, Storage: {$this->storage}GB, " .
            "Screen: {$this->diagonal}\", Battery: {$this->battery}mAh, Color: {$this->color}, OS: {$this->OS}, Price: \${$this->price}, " .
            "Face ID: " . ($this->hasFaceId ? "Yes" : "No") . ", AirDrop: " . ($this->hasAirDrop ? "Yes" : "No");
    }
}