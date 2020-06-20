<?php

use Clue\React\Buzz\Browser;



require __DIR__ . '/vendor/autoload.php';

$loop = \React\EventLoop\Factory::create();
$browser = new Browser($loop);

(new \Jinas\Aggregator\Drivers\DhimartDriver($browser))->extract();

$loop->run();
