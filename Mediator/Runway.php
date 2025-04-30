<?php

namespace Mediator;

class Runway
{
    private int $id;
    public bool $isFree = true;

    function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function highLightRed(): void
    {
        $this->isFree = false;
        echo "Runway $this->id is busy! <br>";
    }

    public function highLightGreen(): void
    {
        $this->isFree = true;
        echo "Runway $this->id is free! <br>";
    }

}