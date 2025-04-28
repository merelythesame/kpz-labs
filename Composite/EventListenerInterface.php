<?php

namespace Composite;

interface EventListenerInterface
{
    public function handle($element): void;
}