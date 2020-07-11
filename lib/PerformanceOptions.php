<?php


namespace HubSpot;


class PerformanceOptions
{
    public ?string $domain = null;
    public ?string $path = null;
    public ?bool $pad = null;
    public ?bool $sum = null;
    public ?string $period = null;
    public ?string $interval = null;
    public ?int $start = null;
    public ?int $end = null;

    public function addQuarterHourPeriod(): void
    {
        $this->period = '15m';
    }

    public function addHalfHourPeriod(): void
    {
        $this->period = '30m';
    }

    public function addOneHourPeriod(): void
    {
        $this->period = '1h';
    }

    public function addFourHourPeriod(): void
    {
        $this->period = '4h';
    }

    public function addTwelveHourPeriod(): void
    {
        $this->period = '12h';
    }

    public function addDayPeriod(): void
    {
        $this->period = '1d';
    }

    public function addWeekPeriod(): void
    {
        $this->period = '1w';
    }

    public function addOneMinuteInterval(): void
    {
        $this->interval = '1m';
    }

    public function addFiveMinuteInterval(): void
    {
        $this->interval = '5m';
    }

    public function addQuarterHourInterval(): void
    {
        $this->interval = '15m';
    }

    public function addHalfHourInterval(): void
    {
        $this->interval = '30m';
    }

    public function addOneHourInterval(): void
    {
        $this->interval = '1h';
    }

    public function addFourHourInterval(): void
    {
        $this->interval = '4h';
    }

    public function addTwelveHourInterval(): void
    {
        $this->interval = '12h';
    }

    public function addDayInterval(): void
    {
        $this->interval = '1d';
    }

    public function addWeekInterval(): void
    {
        $this->interval = '1w';
    }

    public function addStartDate(\DateTime $dateTime)
    {
        $this->start = $dateTime->getTimestamp()*1000;
    }

    public function addEndDate(\DateTime $dateTime)
    {
        $this->end = $dateTime->getTimestamp()*1000;
    }
}