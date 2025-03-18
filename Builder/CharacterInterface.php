<?php

namespace Builder;

interface CharacterInterface
{
    public function reset(): CharacterInterface;
    public function setHeight(string $height): CharacterInterface;
    public function setBodyType(string $bodyType): CharacterInterface;
    public function setHairColor(string $hairColor): CharacterInterface;
    public function setEyeColor(string $eyeColor): CharacterInterface;
    public function setClothing(array $clothing): CharacterInterface;
    public function setInventory(array $inventory): CharacterInterface;
    public function getResult(): string;
}