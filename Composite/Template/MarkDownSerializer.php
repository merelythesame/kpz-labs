<?php

namespace Composite\Template;

use Composite\LightElementNode;
use Composite\LightTextNode;

class MarkDownSerializer extends Serializer
{
    protected function serializeOpening(LightElementNode $elementNode): string
    {
        $tag = $elementNode->getFlyweight()->tagName;

        return match ($tag) {
            'h1' => '# ',
            'h2' => '## ',
            'ul' => "\n",
            'li' => '- ',
            default => ''
        };

    }

    protected function serializeContent(LightElementNode $elementNode): string
    {
        $content = '';
        foreach ($elementNode->getChildren() as $child) {
            if($child instanceof LightTextNode) {
                $content .= $child->getOuterHTML();
            }
            else{
                $content .= $this->serialize($child);
            }
        }
        return $content;
    }

    protected function serializeClosing(LightElementNode $elementNode): string
    {
        $tag = $elementNode->getFlyweight()->tagName;
        return in_array($tag, ['h1', 'h2', 'li']) ? "\n" : '';
    }
}