<?php

use Jinas\Aggregator\ServiceProvider;
use Clue\React\Buzz\Browser;
use Clue\React\Block;
use Jinas\Aggregator\Container;
use Jinas\Aggregator\DB;

require __DIR__ . '/vendor/autoload.php';
$configs = include(__DIR__ . '/configs.php');



$loop = \React\EventLoop\Factory::create();

/*
Registers the Drivers passing the configs into the drivers and pushed promises into an array.
*/
foreach (dot($configs)->get('products') as $product) {
    (new ServiceProvider($configs))->boot(new Browser($loop), (string) $product);
}

// Resolve all the promises inside the container and return back the result as an array
$products = Block\awaitAll(Container::$items, $loop);

// Loop through all the products and create records inside the database
(new DB)->create($products);

$loop->run();
