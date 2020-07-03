<?php

namespace Jinas\Aggregator;

use Clue\React\Buzz\Browser;
use Jinas\Aggregator\Container;
use Jinas\Aggregator\Drivers\{DhimartDriver, EatMvDriver, SeagullMaldivesDriver};

class ServiceProvider
{
    protected $configs;

    public function __construct(array $configs)
    {
        $this->configs = $configs;
    }
    public function boot(Browser $browser, string $product)
    {
        Container::register((new DhimartDriver($browser))
            ->scrape(dot($this->configs)
                ->get('shops.dhimart.search') . $product));

       /*  Container::register((new EatMvDriver($browser))
            ->scrape(dot($this->configs)
                ->get('shops.eatmv.search') . $product)); */

        Container::register((new SeagullMaldivesDriver($browser))
            ->scrape(dot($this->configs)
                ->get('shops.seagullfoods.search') . $product));
    }
}
