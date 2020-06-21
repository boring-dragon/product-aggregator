<?php

use Jinas\Aggregator\ServiceProvider;
use Clue\React\Buzz\Browser;
use Clue\React\Block;
use Jinas\Aggregator\Container;

require __DIR__ . '/vendor/autoload.php';
$configs = include(__DIR__ . '/configs.php');


$loop = \React\EventLoop\Factory::create();
(new ServiceProvider($configs))->boot(new Browser($loop));

$results = Block\awaitAll(Container::$items, $loop);
var_dump($results);

$loop->run();
