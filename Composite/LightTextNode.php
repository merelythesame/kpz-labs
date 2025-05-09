<?php

namespace Composite;
use Composite\Visitor\NodeVisitorInterface;

class LightTextNode extends LightNode {
    private string $text;

    public function __construct(string $text) {
        $this->text = $text;
    }

    public function getOuterHTML(): string {
        return $this->text;
    }

    public function getInnerHTML(): string {
        return $this->getOuterHTML();
    }

    public function accept(NodeVisitorInterface $visitor, int $depth = 1): void {
        $visitor->visitTextNode($this);
    }
}
