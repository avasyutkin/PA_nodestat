<?php

use Symfony\Component\DomCrawler\Crawler;

function getContent($link) {

    $html = file_get_contents($link);
    $crawler = new Crawler(null, $link);

    $crawler->addHtmlContent($html, 'UTF-8');

    $capacity = $crawler->filterXPath('//div[@class="panel-body"][1]/ul[@class="list-unstyled list-spaced"]/li[1]/span[1]')->text();
    $chennel_count = $crawler->filterXPath('//div[@class="panel-body"][1]/ul[@class="list-unstyled list-spaced"]/li[2]/span')->text();
    $rang_capacity = $crawler->filterXPath('//div[@class="panel-body nodeRank"]/dl/dd[1]')->text();
    $rang_channel = $crawler->filterXPath('//div[@class="panel-body nodeRank"]/dl/dd[2]')->text();
    $rang_age = $crawler->filterXPath('//div[@class="panel-body nodeRank"]/dl/dd[3]')->text();

    $content = [
        'capacity' => $capacity,
        'chennel_count' => $chennel_count,
        'rang_capacity' => $rang_capacity,
        'rang_channel' => $rang_channel,
        'rang_age' => $rang_age
    ];

    return $content;
}
