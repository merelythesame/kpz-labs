<?php

namespace Composite\Iterator;

use Composite\LightElementNode;
use Composite\LightNode;
use Iterator;

class BreadthFirstIterator implements Iterator
{
    private array $queue = [];
    private ?LightNode $current = null;

    public function __construct(LightNode $root) {
        $this->queue[] = $root;
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
        if (empty($this->queue)) {
            $this->current = null;
            return;
        }

        $node = array_shift($this->queue);
        $this->current = $node;

        if ($node instanceof LightElementNode) {
            foreach ($node->getChildren() as $child) {
                $this->queue[] = $child;
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