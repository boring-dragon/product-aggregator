<?php

namespace Jinas\Aggregator\Drivers;

use Clue\React\Buzz\Browser;
use Jinas\Aggregator\Models\Product;
use Psr\Http\Message\ResponseInterface;
use React\Promise\PromiseInterface;
use Symfony\Component\DomCrawler\Crawler;

class SeagullMaldivesDriver implements IDriver
{
    private $browser;

    public function __construct(Browser $browser)
    {
        $this->browser = $browser;
    }

    public function scrape($url): PromiseInterface
    {
        return $this->browser->get($url)->then(function (ResponseInterface $response) {
            return $this->extract((string) $response->getBody());
        });
    }

    private function extract(string $responseBody)
    {
        $crawler = new Crawler($responseBody);

        if (!$crawler->filter('li.list-view-item a.full-width-link span.visually-hidden')->first()->count() > 0) {
            return 0;
        }
        $title = $crawler->filter('li.list-view-item a.full-width-link span.visually-hidden')->first()->text();
        $image = $crawler->filter('li.list-view-item div.list-view-item__image-column img.list-view-item__image')->first()->attr('src');
        $price = str_replace('Rf', '', $crawler->filter('li.list-view-item div.price__regular dd span.price-item.price-item--regular')->first()->text());
        $url = $crawler->filter('li.list-view-item a.full-width-link')->first()->attr('href');

        return new Product((string) $title, (string) $image, (int) $price, 'SeagullMaldives', (string) $url);
    }
}
