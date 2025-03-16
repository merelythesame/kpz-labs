<?php

namespace FactoryMethod;

use DateTime;

abstract class Subscription{
    protected string $name;
    protected float $monthPayment;
    public DateTime $startDate;
    public int $period;
    protected array $channels;

    public function __construct(string $name ,float $monthPayment, DateTime $startDate, int $period, array $channels)
    {
        $this->name = $name;
        $this->monthPayment = $monthPayment;
        $this->startDate = $startDate;
        $this->period = $period;
        $this->channels = $channels;
    }

    private function getEndDate(): DateTime {
        $endDate = clone $this->startDate;
        $endDate->modify("+{$this->period} days");
        return $endDate;
    }

    public function listInfo(): string
    {
        return "$this->name subscription: "
            . 'monthly fee: ' . $this->monthPayment . '$, '
            . 'period: ' . $this->period . ' , '
            . 'start date: ' . $this->startDate->format('d.m.Y') . ' , '
            . 'end date' . $this->getEndDate()->format('d.m.Y') . ' , '
            . 'channels: ' . implode(', ', $this->channels);
    }
}