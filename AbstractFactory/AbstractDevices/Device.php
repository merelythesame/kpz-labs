<?php

namespace AbstractFactory\AbstractDevices;

use AbstractFactory\Enums\Keybord;

abstract class Device
{
    protected string $processor;
    protected int $ram;
    protected int $storage;
    protected float $diagonal;
    protected int $battery;
    protected string $color;
    protected string $OS;
    protected string $model;
    protected float $price;

    public function __construct(string $processor, int $ram, int $storage, float $diagonal, int $battery, string $color,
    string $OS, string $model, float $price){
        $this->processor = $processor;
        $this->ram = $ram;
        $this->storage = $storage;
        $this->diagonal = $diagonal;
        $this->battery = $battery;
        $this->color = $color;
        $this->OS = $OS;
        $this->model = $model;
        $this->price = $price;
    }

}