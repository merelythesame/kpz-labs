<?php

namespace Memento;

class TextDocument
{
    private string $content = '';

    public function write(string $text): void
    {
        $this->content .= $text;
    }

    public function erase(): void
    {
        $this->content = '';
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function save(): DocumentMemento
    {
        return new DocumentMemento($this->content);
    }

    public function restore(DocumentMemento $memento): void
    {
        $this->content = $memento->getContent();
    }

}