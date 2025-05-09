<?php

namespace Composite\Visitor;

use Composite\LightElementNode;
use Composite\LightTextNode;

interface NodeVisitorInterface
{
    public function visitTextNode(LightTextNode $node): void;
    public function visitElementNode(LightElementNode $node, int $depth = 1): void;
}