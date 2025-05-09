<?php

namespace Composite;

use Composite\Visitor\NodeVisitorInterface;

abstract class LightNode {
    abstract public function getOuterHTML(): string;
    abstract public function getInnerHTML(): string;
    abstract public function accept(NodeVisitorInterface $visitor, int $depth = 1): void;
}
