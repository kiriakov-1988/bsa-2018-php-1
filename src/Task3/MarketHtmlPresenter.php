<?php declare(strict_types=1);

namespace Cryptocurrency\Task3;

use Cryptocurrency\Task1\CoinMarket;

class MarketHtmlPresenter
{
    public function present(CoinMarket $market): string
    {
        $html = '';

        foreach ($market->getCurrencies() as $currency) {
            $html .= "<img src=\"{$currency->getLogoUrl()}\"> {$currency->getName()}: {$currency->getDailyPrice()}<br>\n";
        }

        return $html;
    }
}