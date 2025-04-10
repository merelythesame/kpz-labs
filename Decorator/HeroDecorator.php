<?php

namespace Decorator;

abstract class HeroDecorator implements HeroInterface
{
    protected HeroInterface $hero;

    public function __construct(HeroInterface $hero){
        $this->hero = $hero;
    }

    public abstract function getDescription(): string;
}