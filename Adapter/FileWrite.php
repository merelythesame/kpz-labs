<?php

namespace Adapter;

class FileWrite
{
    public string $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }
    public function write($message): void{
        self::checkPath($this->path);
        file_put_contents($this->path, $message, FILE_APPEND);
    }

    public function writeLine($message): void{
        self::checkPath($this->path);
        file_put_contents($this->path, $message . PHP_EOL, FILE_APPEND);
    }

    public static function checkPath(string $path): void
    {
        $dir = dirname($path);
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }
        if (!file_exists($path)) {
            touch($path);
            chmod($path, 0666);
        }
    }
}