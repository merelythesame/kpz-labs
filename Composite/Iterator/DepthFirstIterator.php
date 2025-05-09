<?php

namespace Composite\Iterator;

use Composite\LightElementNode;
use Composite\LightNode;
use Iterator;

class DepthFirstIterator implements Iterator
{
    private array $stack = [];
    private ?LightNode $current = null;

    public function __construct(LightNode $root) {
        $this->stack[] = $root;
    }

    public function current(): ?LightNode
    {
        return $this->current;
    }

    public function key(): int
    {
        return spl_object_id($this->current);
    }

    public function next(): void {
        if (empty($this->stack)) {
            $this->current = null;
            return;
        }

        $node = array_pop($this->stack);
        $this->current = $node;

        if ($node instanceof LightElementNode) {
            $children = array_reverse($node->getChildren());
            foreach ($children as $child) {
                $this->stack[] = $child;
            }
        }
    }

    public function rewind(): void {
        $this->next();
    }

    public function valid(): bool {
        return $this->current !== null;
    }

}