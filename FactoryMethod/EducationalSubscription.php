<?php

namespace FactoryMethod;

use DateTime;
use FactoryMethod\Subscription;

class EducationalSubscription extends Subscription
{
    public function __construct(DateTime $startDate){
        parent::__construct('Educational',7.99, $startDate, 90, ['Documentary', 'Discovery', 'ForKids']);
    }
}