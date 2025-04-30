<?php

namespace Mediator;

interface MediatorInterface
{
    public function handleLanding(Aircraft $aircraft): void;
    public function handleTakingOff(Aircraft $aircraft): void;

}