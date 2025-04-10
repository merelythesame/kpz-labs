<?php

namespace Composite;

class LightElementNode extends LightNode {
    private MetaDataFlyweight $flyweight;
    private array $cssClasses = [];
    private array $children = [];

    public function __construct(string $tagName, string $displayType = 'block', string $closingType = 'pair') {
        $this->flyweight = MetaDataFlyweightFactory::getFlyweight($tagName, $displayType, $closingType);
    }

    public function addClass(string $className): void {
        $this->cssClasses[] = $className;
    }

    public function addChild(LightNode $child): void {
        $this->children[] = $child;
    }

    public function getInnerHTML(): string {
        $html = '';
        foreach ($this->children as $child) {
            $html .= $child->getOuterHTML();
        }
        return $html;
    }

    public function getOuterHTML(): string {
        $tagName = $this->flyweight->tagName;
        $closingType = $this->flyweight->closingType;

        $classAttr = empty($this->cssClasses) ? '' : ' class="' . implode(' ', $this->cssClasses) . '"';

        if ($closingType === 'single') {
            return "<{$tagName}{$classAttr} />";
        }

        return "<{$tagName}{$classAttr}>" . $this->getInnerHTML() . "</{$tagName}>";
    }

    public function getChildrenCount(): int {
        return count($this->children);
    }
}
