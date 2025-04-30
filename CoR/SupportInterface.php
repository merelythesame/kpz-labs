<?php

namespace CoR;

interface SupportInterface
{
    public function setNext(SupportInterface $nextSupport): SupportInterface;
    public function handle(?int $choice): ?string;
    public function getQuestion(): ?array;


}