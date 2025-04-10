<?php

namespace Bridge;

interface DisplayInterface
{
    public function draw(string $shape): string;
}