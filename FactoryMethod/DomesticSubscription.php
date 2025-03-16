<?php

namespace FactoryMethod;

use DateTime;
use FactoryMethod\Subscription;

class DomesticSubscription extends Subscription
{
    public function __construct(DateTime $startDate){
        parent::__construct('Domestic' ,9.99, $startDate, 180, ['News', 'Movies', 'Music']);
    }
}