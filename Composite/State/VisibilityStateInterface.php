<?php

namespace Composite\State;

use Composite\LightElementNode;

interface VisibilityStateInterface
{
    public function getOuterHTML(LightElementNode $context): string;
    public function getInnerHTML(LightElementNode $context): string;

}