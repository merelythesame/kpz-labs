<?php

namespace Builder;

class HeroBuilder implements CharacterInterface
{
    private Hero $hero;

    public function reset(): CharacterInterface{
        $this->hero = new Hero();
        return $this;
    }

    public function setHeight(string $height): CharacterInterface
    {
        $this->hero->height = $height;
        return $this;
    }

    public function setBodyType(string $bodyType): CharacterInterface
    {
        $this->hero->bodyType = $bodyType;
        return $this;
    }

    public function setHairColor(string $hairColor): CharacterInterface
    {
        $this->hero->hairColor = $hairColor;
        return $this;
    }

    public function setEyeColor(string $eyeColor): CharacterInterface
    {
        $this->hero->eyeColor = $eyeColor;
        return $this;
    }

    public function setClothing(array $clothing): CharacterInterface
    {
        $this->hero->clothing = $clothing;
        return $this;
    }

    public function setInventory(array $inventory): CharacterInterface
    {
        $this->hero->inventory = $inventory;
        return $this;
    }

    public function setGoodDeeds(array $goodDeeds): CharacterInterface
    {
        $this->hero->goodDeeds = $goodDeeds;
        return $this;
    }

    public function getResult(): string {
        return "Hero: \n" .
            "Height: {$this->hero->height}m\n" .
            "Body Type: {$this->hero->bodyType}\n" .
            "Hair Color: {$this->hero->hairColor}\n" .
            "Eye Color: {$this->hero->eyeColor}\n" .
            "Clothing: " . implode(", ", $this->hero->clothing) . "\n" .
            "Inventory: " . implode(", ", $this->hero->inventory) . "\n" .
            "Good Deeds: " . (!empty($this->hero->goodDeeds) ? implode(", ", $this->hero->goodDeeds) : "None");
    }

}