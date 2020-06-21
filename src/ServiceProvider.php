<?php

namespace Jinas\Aggregator;

use Clue\React\Buzz\Browser;
use Jinas\Aggregator\Container;
use Jinas\Aggregator\Drivers\{DhimartDriver, EatMvDriver, SeagullMaldives};

class ServiceProvider
{
    protected $configs;

    public function __construct(array $configs)
    {
        $this->configs = $configs;
    }
    public function boot(Browser $browser)
    {
        /*
        Container::register((new DhimartDriver($browser))
            ->scrape(dot($this->configs)
                ->get('shops.dhimart.search') . "milk chocolate"));

        Container::register((new EatMvDriver($browser))
            ->scrape(dot($this->configs)
                ->get('shops.eatmv.search') . "milk chocolate"));
*/
        Container::register((new SeagullMaldives($browser))
            ->scrape(dot($this->configs)
                ->get('shops.seagullfoods.search') . "milk chocolate"));
    }
}
