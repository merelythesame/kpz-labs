<?php

namespace Bridge;

class Triangle extends Shape
{
    private float $base;
    private float $height;

    public function __construct(float $base, float $height, string $color, DisplayInterface $display){
        parent::__construct($color, $display);
        $this->base = $base;
        $this->height = $height;
    }

    public function draw(): string
    {
        return $this->display->draw("triangle with base $this->base and height $this->height");
    }

}