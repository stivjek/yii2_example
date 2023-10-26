<?php

namespace app\interfaces;

use app\models\Content;

interface SiteRepositoryInterface
{
    /**
     * @return Content[]
     */
    public function getContent(): array;
}