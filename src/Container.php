<?php

namespace Jinas\Aggregator;

class Container
{
    public static $items;

    public static function register($value)
    {
        static::$items[] = $value;
    }
}
