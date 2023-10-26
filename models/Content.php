<?php

namespace app\models;

use yii\base\Model;

class Content extends Model
{
    public string $title;
    public string $text;
    public string $extraText;

    public function attributeLabels(): array
    {
        return [
            'title' => 'Custom title',
            'text' => 'Custom text',
            'extraText' => 'Custom extra text',
        ];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "{$this->text}: {$this->extraText}";
    }
}