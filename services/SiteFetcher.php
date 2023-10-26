<?php

namespace app\services;

use app\models\Content;

class SiteFetcher
{
    /**
     * @param Content[] $contentList
     *
     * @return Content[]
     */
    public function enrichContent(array $contentList): array
    {
        foreach ($contentList as $content) {
            $content->extraText = "This is extra! {$content->text}";
        }

        return $contentList;
    }
}