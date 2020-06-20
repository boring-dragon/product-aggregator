<?php
namespace Jinas\Aggregator\Drivers;

interface IDriver
{
    public function scrape(string $url);

}