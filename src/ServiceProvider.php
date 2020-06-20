<?php
namespace Jinas\Aggregator;

use Clue\React\Buzz\Browser;
use Jinas\Aggregator\Container;
use Jinas\Aggregator\Drivers\{DhimartDriver, EatMvDriver};

class ServiceProvider
{
    public function boot(Browser $browser)
    {
        Container::register((new DhimartDriver($browser))->scrape("https://dhimart.mv/catalogsearch/result/?q=milk"));
        Container::register(( new EatMvDriver($browser))->scrape("https://www.eat.mv/catalogsearch/result/?q=milk"));
    }
}