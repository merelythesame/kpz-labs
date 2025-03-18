<?php

namespace Builder;

class EnemyBuilder implements CharacterInterface
{
    private Enemy $enemy;

    public function reset(): CharacterInterface{
        $this->enemy = new Enemy();
        return $this;
    }

    public function setHeight(string $height): CharacterInterface
    {
        $this->enemy->height = $height;
        return $this;
    }

    public function setBodyType(string $bodyType): CharacterInterface
    {
        $this->enemy->bodyType = $bodyType;
        return $this;
    }

    public function setHairColor(string $hairColor): CharacterInterface
    {
        $this->enemy->hairColor = $hairColor;
        return $this;
    }

    public function setEyeColor(string $eyeColor): CharacterInterface
    {
        $this->enemy->eyeColor = $eyeColor;
        return $this;
    }

    public function setClothing(array $clothing): CharacterInterface
    {
        $this->enemy->clothing = $clothing;
        return $this;
    }

    public function setInventory(array $inventory): CharacterInterface
    {
        $this->enemy->inventory = $inventory;
        return $this;
    }

    public function setBadDeeds(array $badDeeds): CharacterInterface
    {
        $this->enemy->badDeeds = $badDeeds;
        return $this;
    }

    public function getResult(): string {
        return "Enemy: \n" .
            "Height: {$this->enemy->height}m\n" .
            "Body Type: {$this->enemy->bodyType}\n" .
            "Hair Color: {$this->enemy->hairColor}\n" .
            "Eye Color: {$this->enemy->eyeColor}\n" .
            "Clothing: " . implode(", ", $this->enemy->clothing) . "\n" .
            "Inventory: " . implode(", ", $this->enemy->inventory) . "\n" .
            "Bad Deeds: " . (!empty($this->enemy->badDeeds) ? implode(", ", $this->enemy->badDeeds) : "None");
    }

}