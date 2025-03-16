<?php

namespace FactoryMethod;

use DateTime;
use FactoryMethod\SubscriptionCreator;

class ManagerCall extends SubscriptionCreator
{
    public function CreateSubscription(string $type, DateTime $startDate): Subscription
    {
        echo "Subscription bought via manager call.\n";
        return parent::createByType($type, $startDate);
    }
}