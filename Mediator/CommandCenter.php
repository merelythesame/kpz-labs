<?php

namespace Mediator;

class CommandCenter implements MediatorInterface
{
    private array $runways = [];
    private array $aircrafts = [];
    private array $landingList = [];

    public function __construct(array $runways, array $aircrafts)
    {
        $this->runways = $runways;
        $this->aircrafts = $aircrafts;
    }

    public function handleLanding(Aircraft $aircraft): void
    {
        foreach ($this->runways as $runway) {
            if ($runway->isFree) {
                echo "Aircraft {$aircraft->name} has landed on runway {$runway->getId()}<br>";
                $this->landingList[$runway->getId()] = $aircraft;
                $runway->highLightRed();
                return;
            }
        }
        echo "No available runway for aircraft {$aircraft->name}.<br>";
    }

    public function handleTakingOff(Aircraft $aircraft): void
    {
        foreach ($this->landingList as $key => $value) {
            if ($value === $aircraft) {
                echo "Aircraft {$aircraft->name} has taken off from runway {$key}<br>";

                foreach ($this->runways as $runway) {
                    if ($runway->getId() === $key) {
                        $runway->highLightGreen();
                        break;
                    }
                }

                unset($this->landingList[$key]);
                return;
            }
        }

        echo "Aircraft {$aircraft->name} not found on any runway.<br>";
    }

}