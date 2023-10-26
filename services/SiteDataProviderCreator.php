<?php

namespace app\services;

use app\models\Content;
use yii\data\ArrayDataProvider;
use yii\data\DataProviderInterface;

class SiteDataProviderCreator
{
    /**
     * @param Content[] $contentList
     *
     * @return DataProviderInterface
     */
    public function createContentDataProvider(array $contentList): DataProviderInterface
    {
        return new ArrayDataProvider([
            'allModels' => $contentList,
        ]);
    }
}