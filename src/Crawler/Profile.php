<?php

namespace legendblogs\Sitemap\Crawler;

use Psr\Http\Message\UriInterface;
use Legendblogs\Crawler\CrawlProfiles\CrawlProfile;

class Profile extends CrawlProfile
{
    /** @var callable */
    protected $profile;

    public function shouldCrawlCallback(callable $callback)
    {
        $this->profile = $callback;
    }

    /*
     * Determine if the given url should be crawled.
     */
    public function shouldCrawl(UriInterface $url): bool
    {
        return ($this->profile)($url);
    }
}
