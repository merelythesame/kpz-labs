<?php

namespace Proxy;

class SmartTextReader implements SmartTextReaderInterface
{
    private string $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function readTo2DArray(): array
    {
        $lines = file($this->path, FILE_IGNORE_NEW_LINES);

        $result = [];

        foreach ($lines as $line) {
            $result[] = str_split($line);
        }

        return $result;
    }

}