<?php

namespace Composite;

interface LoadStrategyInterface
{
    public function load(string $src): string;
}