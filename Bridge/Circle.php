<?php

namespace Bridge;

class Circle extends Shape
{
    private float $radius;

    public function __construct(float $radius, string $color, DisplayInterface $display){
        parent::__construct($color, $display);
        $this->radius = $radius;
    }

    public function draw(): string
    {
        return $this->display->draw("circle with radius $this->radius");
    }
}