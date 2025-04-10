<?php

namespace Composite;

class MetaDataFlyweight
{
    public string $tagName;
    public string $displayType;
    public string $closingType;

    public function __construct(string $tagName, string $displayType, string $closingType) {
        $this->tagName = $tagName;
        $this->displayType = $displayType;
        $this->closingType = $closingType;
    }

}