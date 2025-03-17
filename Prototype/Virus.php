<?php

namespace Prototype;

class Virus
{
    private int $age;
    private float $weight;
    private string $name;
    private string $type;
    private array $children;

    function __construct(int $age, float $weight, string $name, string $type, array $children = [])
    {
        $this->age = $age;
        $this->weight = $weight;
        $this->name = $name;
        $this->type = $type;
        $this->children = $children;
    }

    public function addChild(Virus $child): void{
        $this->children[] = $child;
    }

    public function __clone(): void
    {
        foreach ($this->children as $key => $child) {
            $this->children[$key] = clone $child;
        }
    }

    public function __toString(): string
    {
        $childNames = array_map(fn($child) => $child->name, $this->children);
        return "Virus(name={$this->name}, type={$this->type}, age={$this->age}, weight={$this->weight}, children=[" . implode(", ", $childNames) . "])";
    }


}