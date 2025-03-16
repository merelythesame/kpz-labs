<?php

namespace FactoryMethod;
use DateTime;
class MobileApp extends SubscriptionCreator
{

    public function CreateSubscription(string $type, DateTime $startDate): Subscription
    {
        echo "Subscription bought via mobile app.\n";
        return parent::createByType($type, $startDate);
    }

}