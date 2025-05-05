<?php

namespace Composite;

use Composite\State\VisibilityStateInterface;
use Composite\State\VisibleState;

class LightElementNode extends LightNode {
    private MetaDataFlyweight $flyweight;
    private array $cssClasses = [];
    private array $children = [];
    private VisibilityStateInterface $state;

    public function __construct(string $tagName, string $displayType = 'block', string $closingType = 'pair') {
        $this->flyweight = MetaDataFlyweightFactory::getFlyweight($tagName, $displayType, $closingType);
        $this->state = new VisibleState();
    }

    public function addClass(string $className): void {
        $this->cssClasses[] = $className;
    }

    public function getCssClasses(): array
    {
        return $this->cssClasses;
    }

    public function addChild(LightNode $child): void {
        $this->children[] = $child;
    }

    public function getOuterHTML(): string {
        return $this->state->getOuterHTML($this);
    }

    public function getInnerHTML(): string {
        return $this->state->getInnerHTML($this);
    }

    public function getChildrenCount(): int {
        return count($this->children);
    }

    public function getFlyweight(): MetaDataFlyweight
    {
        return $this->flyweight;
    }

    public function generateInnerHTML(): string {
        $html = '';
        foreach ($this->children as $child) {
            $html .= $child->getOuterHTML();
        }
        return $html;
    }

    public function setState(VisibilityStateInterface $state): void
    {
        $this->state = $state;
    }
}
