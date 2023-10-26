<?php

namespace app\services;

use app\interfaces\SiteRepositoryInterface;
use yii\data\DataProviderInterface;

class SiteService
{
    public function __construct(
        private readonly SiteRepositoryInterface $siteRepository,
        private readonly SiteFetcher $siteFetcher,
        private readonly SiteDataProviderCreator $dataProviderCreator,
    ) {
    }

    /**
     * @return DataProviderInterface
     */
    public function getContent(): DataProviderInterface
    {
        $contentList = $this->siteRepository->getContent();
        $contentList = $this->siteFetcher->enrichContent($contentList);

        return $this->dataProviderCreator->createContentDataProvider($contentList);
    }
}