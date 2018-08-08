<?php

namespace humhub\modules\slack\models;

use Yii;

/**
 * ConfigureForm defines the configurable fields.
 */
class ConfigureForm extends \yii\base\Model
{

    public $serverUrl;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['serverUrl', 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'serverUrl' => Yii::t('SlackModule.base', 'Slack Widget URL:'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'serverUrl' => Yii::t('SlackModule.base', 'e.g. https://embed.small.chat/{id}.js'),
        ];
    }

    public function loadSettings()
    {
        $this->serverUrl = Yii::$app->getModule('slack')->settings->get('serverUrl');

        return true;
    }

    public function save()
    {
        Yii::$app->getModule('slack')->settings->set('serverUrl', $this->serverUrl);

        return true;
    }

}
