<?php

namespace app\repositories;

use app\interfaces\SiteRepositoryInterface;
use app\models\Content;

class SiteRepository implements SiteRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function getContent(): array
    {
        $result = [];

        for ($i = 0; $i <= rand(5, 10); $i++) {
            $result[] = new Content([
                'title' => "Title {$i}",
                'text' => "Text {$i}",
            ]);
        }

        return $result;
    }
}