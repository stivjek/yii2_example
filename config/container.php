<?php

/**
 * @var array $params
 */

return [
    'singletons' => array_merge(
        require(__DIR__ . '/container/repositories.php'),
        require(__DIR__ . '/container/services.php'),
    ),
];
