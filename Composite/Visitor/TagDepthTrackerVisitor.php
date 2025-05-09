<?php

namespace Composite\Visitor;

use Composite\LightTextNode;
use Composite\LightElementNode;

class TagDepthTrackerVisitor implements NodeVisitorInterface
{
    private int $maxDepth = 0;
    private array $depthCounts = [];

    public function visitTextNode(LightTextNode $node): void {

    }

    public function visitElementNode(LightElementNode $node, int $depth = 1): void {
        if ($depth > $this->maxDepth) {
            $this->maxDepth = $depth;
        }

        if (!isset($this->depthCounts[$depth])) {
            $this->depthCounts[$depth] = 0;
        }
        $this->depthCounts[$depth]++;

        foreach ($node->getChildren() as $child) {
            $child->accept($this, $depth + 1);
        }
    }

    public function getMaxDepth(): int {
        return $this->maxDepth;
    }

    public function getDepthCounts(): array {
        return $this->depthCounts;
    }

}