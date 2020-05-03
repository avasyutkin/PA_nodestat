<?php

use Symfony\Component\DomCrawler\Crawler;

function getContent($link) {

    $html = file_get_contents($link);
    $crawler = new Crawler(null, $link);

    $crawler->addHtmlContent($html, 'UTF-8');

    $capacity = $crawler->filterXPath('//div[@class="panel-body"][1]/ul[@class="list-unstyled list-spaced"]/li[1]/span[1]')->text();
    $channel_count = $crawler->filterXPath('//div[@class="panel-body"][1]/ul[@class="list-unstyled list-spaced"]/li[2]/span')->text();
    $rank_capacity = $crawler->filterXPath('//div[@class="panel-body nodeRank"]/dl/dd[1]')->text();
    $rank_channel = $crawler->filterXPath('//div[@class="panel-body nodeRank"]/dl/dd[2]')->text();
    $rank_age = $crawler->filterXPath('//div[@class="panel-body nodeRank"]/dl/dd[3]')->text();

    $content = [
        'capacity' => $capacity,
        'channel_count' => $channel_count,
        'rank_capacity' => $rank_capacity,
        'rank_channel' => $rank_channel,
        'rank_age' => $rank_age
    ];

    return $content;
}
