<?php

namespace Composite\State;

use Composite\LightElementNode;

class CollapsedState implements VisibilityStateInterface
{
    public function getOuterHTML(LightElementNode $context): string {
        $tagName = $context->getFlyweight()->tagName;
        $classAttr = empty($context->getCssClasses()) ? '' : ' class="' . implode(' ', $context->getCssClasses()) . '"';
        return "<{$tagName} {$classAttr}></{$tagName}>";
    }

    public function getInnerHTML(LightElementNode $context): string {
        return '';
    }

}