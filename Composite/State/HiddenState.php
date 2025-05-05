<?php

namespace Composite\State;

use Composite\LightElementNode;

class HiddenState implements VisibilityStateInterface
{
    public function getOuterHTML(LightElementNode $context): string {
        return '';
    }

    public function getInnerHTML(LightElementNode $context): string {
        return '';
    }

}