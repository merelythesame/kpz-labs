<?php

namespace Decorator\Items;

use Decorator\HeroDecorator;

class IronArmor extends HeroDecorator {


    public function getDescription(): string
    {
        return $this->hero->getDescription() . " with Iron Armor";
    }
}