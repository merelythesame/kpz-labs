<?php

namespace AbstractFactory\ConcreteDevices;

use AbstractFactory\AbstractDevices\Tablet;

class XiaomiTablet extends Tablet
{
    protected bool $hasXiaomiPen;

    public function __construct(string $processor, int $ram, int $storage,
                                float $diagonal, int $battery, string $color,
                                bool $hasExtraKeyboard, bool $canCall, bool $hasXiaomiPen,
                                float $price, string $OS, string $model)
    {
        parent::__construct($processor, $ram, $storage, $diagonal, $battery, $color, $hasExtraKeyboard, $canCall, $OS, $model, $price);
        $this->hasXiaomiPen = $hasXiaomiPen;
    }

    public function getInfo(): string
    {
        return "Xiaomi Tablet - Model: {$this->model}, Processor: {$this->processor}, RAM: {$this->ram}GB, Storage: {$this->storage}GB, " .
            "Screen: {$this->diagonal}\", Battery: {$this->battery}mAh, Color: {$this->color}, OS: {$this->OS}, Price: \${$this->price}, " .
            "Supports Xiaomi Pen: " . ($this->hasXiaomiPen ? "Yes" : "No") . ", Extra Keyboard: " . ($this->hasExtraKeyboard ? "Yes" : "No") . ", Can Call: " . ($this->canCall ? "Yes" : "No");
    }
}