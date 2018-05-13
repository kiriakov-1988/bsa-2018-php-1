<?php


namespace Cryptocurrency\Task3;


class RandPrice
{
    private $minPrice;
    private $maxPrice;

    public function __construct($minPrice = 0, $maxPrice = 1000)
    {
        $this->minPrice = $minPrice;
        $this->maxPrice = $maxPrice;
    }

    public function getRandDailyPrice():float
    {
        $randDailyPrice = mt_rand($this->minPrice, $this->maxPrice);
        $randDailyPrice .= '.';
        $randDailyPrice .= mt_rand(0, 99);

        return (float)$randDailyPrice;
    }
}
