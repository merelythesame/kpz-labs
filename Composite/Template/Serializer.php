<?php

namespace Composite\Template;

use Composite\LightElementNode;

abstract class Serializer
{
    final public function serialize(LightElementNode $elementNode): string {
        return $this->serializeOpening($elementNode)
            . $this->serializeContent($elementNode)
            . $this->serializeClosing($elementNode);
    }

    abstract protected function serializeOpening(LightElementNode $elementNode): string;
    abstract protected function serializeContent(LightElementNode $elementNode): string;
    abstract protected function serializeClosing(LightElementNode $elementNode): string;
}