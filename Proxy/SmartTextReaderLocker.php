<?php

namespace Proxy;

class SmartTextReaderLocker implements SmartTextReaderInterface
{
    private SmartTextReader $reader;
    private string $path;
    private string $regex;

    function __construct(string $path, string $regex = '/.*/')
    {
        $this->reader = new SmartTextReader($path);
        $this->regex = $regex;
        $this->path = $path;
    }

    public function readTo2DArray(): array
    {
        if(preg_match($this->regex, $this->path)) {
            return $this->reader->readTo2DArray();
        }

        return ['Access denied!'];

    }
}