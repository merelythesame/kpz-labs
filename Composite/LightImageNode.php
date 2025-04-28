<?php

namespace Composite;

class LightImageNode extends LightNode
{
    private string $name;
    private LoadStrategyInterface $strategy;

    public function __construct(string $name, LoadStrategyInterface $strategy = new LocalLoadStrategy()) {
        $this->name = $name;
        $this->strategy = $strategy;
    }

    public function getOuterHTML(): string {
        return $this->strategy->load($this->name);
    }

    public function getInnerHTML(): string
    {
        return '';
    }

    public function setStrategy(LoadStrategyInterface $strategy): void
    {
        $this->strategy = $strategy;
    }
}