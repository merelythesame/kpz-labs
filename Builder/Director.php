<?php

namespace Builder;

class Director
{
    public function makeHero(CharacterInterface $builder): void{
        $builder->reset();
        $builder->setHeight(1.85)
            ->setBodyType('Athletic')
            ->setBodyType('Athletic')
            ->setHairColor('Blonde')
            ->setEyeColor('Blue')
            ->setClothing(['Armor', 'Cape'])
            ->setInventory(['Sword', 'Shield'])
            ->setGoodDeeds(['Saved princess', 'Defeated a dragon']);
    }

    public function makeEnemy(CharacterInterface $builder): void {
        $builder->reset();
        $builder->setHeight(1.90)
            ->setBodyType('Muscular')
            ->setHairColor('Black')
            ->setEyeColor('Red')
            ->setClothing(['Dark Cloak', 'Spiked Armor'])
            ->setInventory(['Poison Dagger', 'Dark Magic Tome'])
            ->setBadDeeds(['Destroyed a village', 'Cursed a kingdom']);
    }
}