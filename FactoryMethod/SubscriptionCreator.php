<?php

namespace FactoryMethod;

use DateTime;

abstract class SubscriptionCreator
{
    public abstract function CreateSubscription(string $type, DateTime $startDate): Subscription;

    public static function createByType(string $type, DateTime $startDate): ?Subscription {
        return match ($type) {
            "Domestic" => new DomesticSubscription($startDate),
            "Educational" => new EducationalSubscription($startDate),
            "Premium" => new PremiumSubscription($startDate),
            default => null,
        };
    }

}