<?php

use Jinas\Aggregator\ServiceProvider;
use Clue\React\Buzz\Browser;
use Clue\React\Block;
use Jinas\Aggregator\Container;
use Jinas\Aggregator\DB;

require __DIR__ . '/vendor/autoload.php';
$configs = include(__DIR__ . '/configs.php');


$loop = \React\EventLoop\Factory::create();
(new ServiceProvider($configs))->boot(new Browser($loop));

$products = Block\awaitAll(Container::$items, $loop);

// Loop through all the products and create records inside the database
(new DB)->create($products);

$loop->run();
