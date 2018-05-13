<?php

require __DIR__ . '/../../vendor/autoload.php';

use Cryptocurrency\Task1\Bitcoin;
use Cryptocurrency\Task1\Ethereum;
use Cryptocurrency\Task1\Dogecoin;
use Cryptocurrency\Task1\CoinMarket;
use Cryptocurrency\Task3\MarketHtmlPresenter;
use Cryptocurrency\Task3\RandPrice;

// Fill in your market with currencies and use your presenter to show data here:
$market = new CoinMarket();
$dailyPrice = new RandPrice();

$bitcoin = new Bitcoin($dailyPrice->getRandDailyPrice());
$ethereum = new Ethereum($dailyPrice->getRandDailyPrice());
$dogecoin = new Dogecoin($dailyPrice->getRandDailyPrice());

$market->addCurrency($bitcoin);
$market->addCurrency($ethereum);
$market->addCurrency($dogecoin);

$marketPresenter = new MarketHtmlPresenter();
$presentation = $marketPresenter->present($market);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Built-in Web Server</title>
</head>
<body>
<?php echo $presentation ?>
</body>
</html>