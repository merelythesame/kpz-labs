<?php

namespace Bridge;

class Raster implements DisplayInterface
{
    public function draw(string $shape): string
    {
        return "Drawing $shape as pixel";
    }
}