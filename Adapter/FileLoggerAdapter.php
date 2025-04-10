<?php

namespace Adapter;

class FileLoggerAdapter implements LogInterface
{
    private FileWrite $fileWrite;

    public function __construct(FileWrite $fileWriter) {
        $this->fileWrite = $fileWriter;
    }

    public function log(string $message): void {
        $this->fileWrite->writeLine("[INFO] " . $message);
    }

    public function error(string $message): void {
        $this->fileWrite->writeLine("[ERROR] " . $message);
    }

    public function warn(string $message): void {
        $this->fileWrite->writeLine("[WARNING] " . $message);
    }

}