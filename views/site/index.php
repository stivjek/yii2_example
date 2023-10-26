<?php

use yii\data\DataProviderInterface;
use yii\grid\GridView;
use yii\web\View;

/**
 * @var View $this
 * @var DataProviderInterface $contentDataProvider
 */

$this->title = 'My Yii Application';

?>

<?= GridView::widget([
    'dataProvider' => $contentDataProvider,
    'columns' => [
        'title',
        'text',
        'extraText',
    ],
]); ?>
