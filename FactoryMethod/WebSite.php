<?php

namespace FactoryMethod;

use DateTime;

class WebSite extends SubscriptionCreator
{

    public function CreateSubscription(string $type, DateTime $startDate): Subscription
    {
        echo "Subscription bought via website.\n";
        return parent::createByType($type, $startDate);
    }
}