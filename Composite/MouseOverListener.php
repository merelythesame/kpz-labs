<?php

namespace Composite;

class MouseOverListener implements EventListenerInterface
{
    public function handle($element): void {
        echo "Mouse over on ". $element->getinnerHtml() ."element";
    }
}