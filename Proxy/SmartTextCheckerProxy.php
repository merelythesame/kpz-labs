<?php

namespace Proxy;

class SmartTextCheckerProxy implements SmartTextReaderInterface
{
    const string LOG = 'textReader.log';
    private SmartTextReader $reader;
    private string $path;

    function __construct(string $path)
    {
        $this->reader = new SmartTextReader($path);
        $this->path = $path;
    }

    public function readTo2DArray(): array
    {
        if (!file_exists(SmartTextCheckerProxy::LOG)) {
            touch(SmartTextCheckerProxy::LOG);
        }

        if (!file_exists($this->path)) {
            echo 'File not found: ' . $this->path;
        }

        file_put_contents(SmartTextCheckerProxy::LOG, "[Info] Opening file: {$this->path}" . PHP_EOL, FILE_APPEND);

        $this->reader->readTo2DArray();
        $data = $this->reader->readTo2DArray();

        file_put_contents(SmartTextCheckerProxy::LOG, "[Info] Successfully read the file." . PHP_EOL, FILE_APPEND);

        $lineCount = count($data);
        $charCount = array_reduce($data, fn($carry, $line) => $carry + count($line), 0);

        file_put_contents(SmartTextCheckerProxy::LOG, "[Stats] Lines: $lineCount, Characters: $charCount" . PHP_EOL, FILE_APPEND);

        file_put_contents(SmartTextCheckerProxy::LOG, "[Info] Closing file: {$this->path}" . PHP_EOL, FILE_APPEND);

        return $data;
    }
}