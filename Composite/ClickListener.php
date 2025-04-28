<?php

namespace Composite;

class ClickListener implements EventListenerInterface
{
    public function handle($element): void {
        echo "Clicked on ". $element->getinnerHtml() ."element <br>";
    }

}