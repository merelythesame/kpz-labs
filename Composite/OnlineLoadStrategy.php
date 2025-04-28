<?php

namespace Composite;

class OnlineLoadStrategy implements LoadStrategyInterface
{
    public function load(string $name): string {
        return "<img src=\"https://www.w3schools.com/w3images/{$name}\" alt=\"Image\" height='100'>";
    }
}