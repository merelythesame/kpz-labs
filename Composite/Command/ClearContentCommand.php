<?php

namespace Composite\Command;

use Composite\LightElementNode;

class ClearContentCommand implements CommandInterface
{
    private LightElementNode $target;
    private array $backup = [];
    private bool $executed = false;

    public function __construct(LightElementNode $target) {
        $this->target = $target;
    }

    public function execute(): void {
        if (!$this->executed) {
            $this->backup = $this->target->getChildren();
            $this->target->clearChildren();
            $this->executed = true;
        }
    }

    public function undo(): void {
        if ($this->executed) {
            foreach ($this->backup as $child) {
                $this->target->addChild($child);
            }
            $this->executed = false;
        }
    }

    public function isExecuted(): bool {
        return $this->executed;
    }

}