<?php

namespace Jinas\Aggregator\Models;

class Product
{
    /**
     * Title of the product
     *
     * @var string
     */
    public $title;
    /**
     * Product image stored as a string
     *
     * @var string
     */
    public $image;
    /**
     * Product price
     *
     * @var int
     */
    public $price;

    /**
     * what Store the product is from
     *
     * @var string
     */
    public $store;
    
    /**
     * Product URl
     *
     * @var string
     */
    public $url;

    /**
     * __construct
     *
     * @param  string $title
     * @param  string $image
     * @param  string $price
     * @return void
     */
    public function __construct(string $title, string $image, int $price, string $store, string $url)
    {
        $this->title = $title;
        $this->image = $image;
        $this->price = $price;
        $this->store = $store;
        $this->url = $url;
    }
}
