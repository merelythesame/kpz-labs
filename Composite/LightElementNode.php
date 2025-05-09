<?php

namespace Composite;

use Composite\Command\ClearContentCommand;
use Composite\Command\CommandInterface;
use Composite\State\VisibilityStateInterface;
use Composite\State\VisibleState;
use Composite\Visitor\NodeVisitorInterface;

class LightElementNode extends LightNode {
    private MetaDataFlyweight $flyweight;
    private array $cssClasses = [];
    private array $children = [];
    private VisibilityStateInterface $state;
    private CommandInterface $command;

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

    public function getChildren(): array
    {
        return $this->children;
    }

    public function clearChildren(): void {
        $this->children = [];
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

    public function accept(NodeVisitorInterface $visitor, int $depth = 1): void {
        $visitor->visitElementNode($this, $depth);
    }

    public function setState(VisibilityStateInterface $state): void
    {
        $this->state = $state;
    }

    public function setCommand(CommandInterface $command): void
    {
        $this->command = $command;
    }

    public function executeCommand(): void
    {
        if ($this->command instanceof ClearContentCommand) {
            if ($this->command->isExecuted()) {
                $this->command->undo();
            } else {
                $this->command->execute();
            }
        } else {
            $this->command?->execute();
        }

    }
}
