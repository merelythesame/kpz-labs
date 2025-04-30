<?php

namespace Memento;

class TextEditor
{
    private TextDocument $document;
    private array $history = [];

    public function __construct()
    {
        $this->document = new TextDocument();
    }

    public function write(string $text): void
    {
        $this->save();
        $this->document->write($text);
    }

    public function getContent(): string
    {
        return $this->document->getContent();
    }

    public function undo(): void
    {
        if (!empty($this->history)) {
            $memento = array_pop($this->history);
            $this->document->restore($memento);
        }
    }

    private function save(): void
    {
        $this->history[] = $this->document->save();
    }

}