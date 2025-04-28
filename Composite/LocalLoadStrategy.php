<?php

namespace Composite;

class LocalLoadStrategy implements LoadStrategyInterface
{
    public function load(string $name): string {
        return "<img src=\"./Composite/img/{$name}\" alt=\"Image\" height='100'>";
    }
}