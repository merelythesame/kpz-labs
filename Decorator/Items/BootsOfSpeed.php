<?php

namespace Decorator\Items;


use Decorator\HeroDecorator;

class BootsOfSpeed extends HeroDecorator
{

    public function getDescription(): string
    {
        return $this->hero->getDescription() . " with Boots of the speed";
    }
}