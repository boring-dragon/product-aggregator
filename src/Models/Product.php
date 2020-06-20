<?php

namespace Jinas\Aggregator\Models;

class Product
{
    public $title;
    public $image;
    public $price;

    public function __construct(string $title,string $image,string $price) 
    {
        $this->title = $title;
        $this->image = $image;
        $this->price = $price;
    }
}
