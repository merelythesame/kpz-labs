<?php

namespace Composite;

use mysql_xdevapi\DatabaseObject;

class EventManager
{
    private array $listeners = [];

    public function addListener(string $eventType, EventListenerInterface $listener): void {
        $this->listeners[$eventType][] = $listener;
    }

    public function removeListener(string $eventType, EventListenerInterface $listener): void {
        if (!isset($this->listeners[$eventType])) return;

        $this->listeners[$eventType] = array_filter(
            $this->listeners[$eventType],
            fn($l) => $l !== $listener
        );
    }

    public function notify(string $eventType, mixed $data): void {
        if (!isset($this->listeners[$eventType])) return;

        foreach ($this->listeners[$eventType] as $listener) {
            $listener->handle($data);
        }
    }
}