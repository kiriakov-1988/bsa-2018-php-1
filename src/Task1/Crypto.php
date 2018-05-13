<?php

namespace Cryptocurrency\Task1;


abstract class Crypto implements Currency
{
    protected $name;
    protected $dailyPrice;
    protected $logoUrl;

    public function __construct($dailyPrice)
    {
        $this->dailyPrice = $dailyPrice;
    }


    public function getName(): string
    {
        return $this->name;
    }

    public function getDailyPrice(): float
    {
        return $this->dailyPrice;
    }

    public function getLogoUrl(): string
    {
        return $this->logoUrl;
    }
}