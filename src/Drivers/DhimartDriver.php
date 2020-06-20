<?php

namespace Jinas\Aggregator\Drivers;

use Clue\React\Buzz\Browser;
use Symfony\Component\DomCrawler\Crawler;
use Psr\Http\Message\ResponseInterface;
use Jinas\Aggregator\Models\Product;


class DhimartDriver
{
    private $browser;

    public function __construct(Browser $browser)
    {
        $this->browser = $browser;
    }
    public function extract()
    {
        $this->browser->get("https://dhimart.mv/catalogsearch/result/?q=baked+beans")->then(function (ResponseInterface $response) {

            $crawler = new Crawler((string) $response->getBody());
        
            $title = $crawler->filter('ol.products.list.items.product-items strong.product.name.product-item-name a.product-item-link')->first()->text();
            $image = $crawler->filter('ol.products.list.items.product-items img.product-image-photo.hovered-img')->first()->attr('src');
            $price = $crawler->filter('ol.products.list.items.product-items span.price')->first()->text();

            return new Product($title, $image, $price);
        });
    }
}