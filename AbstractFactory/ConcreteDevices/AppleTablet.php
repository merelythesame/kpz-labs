<?php

namespace AbstractFactory\ConcreteDevices;

use AbstractFactory\AbstractDevices\Tablet;
use AbstractFactory\Enums\GPU;
use AbstractFactory\Enums\Keybord;

class AppleTablet extends Tablet
{
    protected bool $hasApplePencil;

    public function __construct(string $processor, int $ram, int $storage,
                                float $diagonal, int $battery, string $color,
                                 bool $hasExtraKeyboard, bool $canCall, $hasApplePencil,
                                float $price, string $OS, string $model,)
    {
        parent::__construct($processor, $ram, $storage, $diagonal, $battery, $color, $hasExtraKeyboard, $canCall, $OS, $model, $price);
        $this->hasApplePencil = $hasApplePencil;

    }

    public function getInfo(): string
    {
        return "Apple Tablet - Model: {$this->model}, Processor: {$this->processor}, RAM: {$this->ram}GB, Storage: {$this->storage}GB, " .
            "Screen: {$this->diagonal}\", Battery: {$this->battery}mAh, Color: {$this->color}, OS: {$this->OS}, Price: \${$this->price}, " .
            "Supports Apple Pencil: " . ($this->hasApplePencil ? "Yes" : "No") . ", Extra Keyboard: " . ($this->hasExtraKeyboard ? "Yes" : "No") . ", Can Call: " . ($this->canCall ? "Yes" : "No");
    }
}