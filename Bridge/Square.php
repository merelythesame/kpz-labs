<?php

namespace Bridge;

class Square extends Shape
{
    private float $side;

    public function __construct(float $side, string $color, DisplayInterface $display){
        parent::__construct($color, $display);
        $this->side = $side;
    }
    public function draw(): string
    {
        return $this->display->draw("square with side $this->side");
    }
}