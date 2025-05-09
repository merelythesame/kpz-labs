<?php

namespace Composite\Template;

use Composite\LightElementNode;

class JsonSerializer extends Serializer
{

    protected function serializeOpening(LightElementNode $elementNode): string
    {
        return '';
    }

    protected function serializeContent(LightElementNode $elementNode): string
    {
        $result = [
            'tag' => $elementNode->getFlyweight()->tagName,
            'classes' => $elementNode->getCssClasses(),
            'children' => []
        ];

        foreach ($elementNode->getChildren() as $child) {
            if ($child instanceof LightElementNode) {
                $result['children'][] = json_decode($this->serialize($child), true);
            } elseif (method_exists($child, '__toString')) {
                $result['children'][] = ['text' => (string)$child];
            }
        }

        return json_encode($result, JSON_PRETTY_PRINT);
    }

    protected function serializeClosing(LightElementNode $elementNode): string
    {
        return '';
    }
}