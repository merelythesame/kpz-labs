<?php

namespace Composite;

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
}
