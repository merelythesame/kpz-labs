<?php

namespace Decorator\Items;

use Decorator\HeroDecorator;

class FireSword extends HeroDecorator
{

    public function getDescription(): string
    {
        return $this->hero->getDescription() . " with Fire Sword";
    }

}