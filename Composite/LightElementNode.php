<?php

namespace Composite;

class LightElementNode extends LightNode {
    private string $tagName;
    private string $displayType;
    private string $closingType;
    private array $cssClasses = [];
    private array $children = [];

    public function __construct(string $tagName, string $displayType = 'block', string $closingType = 'pair') {
        $this->tagName = $tagName;
        $this->displayType = $displayType;
        $this->closingType = $closingType;
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
        $classAttr = empty($this->cssClasses) ? '' : ' class="' . implode(' ', $this->cssClasses) . '"';

        if ($this->closingType === 'single') {
            return "<{$this->tagName}{$classAttr} />";
        }

        return "<{$this->tagName}{$classAttr}>" . $this->getInnerHTML() . "</{$this->tagName}>";
    }

    public function getChildrenCount(): int {
        return count($this->children);
    }

    public function getDisplayType(): string
    {
        return $this->displayType;
    }
}
