<?php

namespace Bridge;

class Vector implements DisplayInterface
{

    public function draw(string $shape): string
    {
        return "Drawing $shape as vector";
    }

}