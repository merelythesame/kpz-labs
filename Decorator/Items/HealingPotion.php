<?php

namespace Decorator\Items;

use Decorator\HeroDecorator;

class HealingPotion extends HeroDecorator
{

    public function getDescription(): string
    {
        return $this->hero->getDescription() . " with Healing Potion";
    }
}