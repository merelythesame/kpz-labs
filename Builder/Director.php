<?php

namespace Builder;

class Director
{
    public function makeHero(CharacterInterface $builder): void{
        $builder->reset();
        $builder->setHeight(1.85);
        $builder->setBodyType('Athletic');
        $builder->setHairColor('Blonde');
        $builder->setEyeColor('Blue');
        $builder->setClothing(['Armor', 'Cape']);
        $builder->setInventory(['Sword', 'Shield']);
        $builder->setGoodDeeds(['Saved princess', 'Defeated a dragon']);
    }

    public function makeEnemy(CharacterInterface $builder): void {
        $builder->reset();
        $builder->setHeight(1.90);
        $builder->setBodyType('Muscular');
        $builder->setHairColor('Black');
        $builder->setEyeColor('Red');
        $builder->setClothing(['Dark Cloak', 'Spiked Armor']);
        $builder->setInventory(['Poison Dagger', 'Dark Magic Tome']);
        $builder->setBadDeeds(['Destroyed a village', 'Cursed a kingdom']);
    }
}