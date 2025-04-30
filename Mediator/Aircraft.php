<?php

namespace Mediator;

class Aircraft
{
    public string $name;
    public MediatorInterface $mediator;

    public function __construct(string $name, CommandCenter $mediator)
    {
        $this->name = $name;
        $this->mediator = $mediator;
    }

    public function requestToTakeOff(): void{
        echo "Aircraft $this->name Request to Land <br>";
        $this->mediator->handleTakingOff($this);
    }

    public function requestToLand(): void{
        echo "Aircraft $this->name Request to Land <br>";
        $this->mediator->handleLanding($this);
    }

}