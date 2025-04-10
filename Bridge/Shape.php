<?php

namespace Bridge;

abstract class Shape
{
    protected string $color;
    protected DisplayInterface $display;

    function __construct(string $color, DisplayInterface $display)
    {
        $this->color = $color;
        $this->display = $display;
    }

    public abstract function draw(): string;
}