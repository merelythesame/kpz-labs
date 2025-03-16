<?php

namespace FactoryMethod;

use DateTime;
use FactoryMethod\Subscription;

class PremiumSubscription extends Subscription
{
    public function __construct(DateTime $startDate){
        parent::__construct('Premium',19.99, $startDate, 365, ['Sport', 'Edu' ,'Series','News', 'Movies', 'Music']);
    }
}