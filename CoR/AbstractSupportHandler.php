<?php

namespace CoR;

abstract class AbstractSupportHandler implements SupportInterface
{
    protected ?SupportInterface $nextSupportHandler = null;

    public function setNext(SupportInterface $nextSupport): SupportInterface
    {
        $this->nextSupportHandler = $nextSupport;
        return $nextSupport;
    }

    public function handle(?int $choice): ?string
    {
        return $this->nextSupportHandler?->handle($choice);
    }

    public function getQuestion(): ?array
    {
        return null;
    }
}