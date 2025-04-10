<?php

namespace Composite;

abstract class LightNode {
    abstract public function getOuterHTML(): string;
    abstract public function getInnerHTML(): string;
}
