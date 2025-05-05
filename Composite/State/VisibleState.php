<?php

namespace Composite\State;

use Composite\LightElementNode;

class VisibleState implements VisibilityStateInterface
{
    public function getOuterHTML(LightElementNode $context): string {
        $tagName = $context->getFlyweight()->tagName;
        $innerHTML = $context->getInnerHTML();

        $classAttr = empty($context->getCssClasses()) ? '' : ' class="' . implode(' ', $context->getCssClasses()) . '"';

        if ($context->getFlyweight()->closingType === 'single') {
            return "<{$tagName}{$classAttr} />";
        }

        return "<{$tagName}{$classAttr}>" . $innerHTML . "</{$tagName}>";
    }

    public function getInnerHTML(LightElementNode $context): string {
        return $context->generateInnerHTML();
    }

}