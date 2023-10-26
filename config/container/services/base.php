<?php

use app\services\SiteDataProviderCreator;
use app\services\SiteFetcher;
use app\services\SiteService;

/**
 * @var array $params
 */

return [
    SiteFetcher::class => SiteFetcher::class,
    SiteDataProviderCreator::class => SiteDataProviderCreator::class,
    SiteService::class => SiteService::class,
];
