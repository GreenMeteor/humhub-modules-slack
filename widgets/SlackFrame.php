<?php

namespace humhub\modules\slack\widgets;

use Yii;
use yii\helpers\Url;
use humhub\libs\Html;
use humhub\components\Widget;

/**
 *
 * @author Felli
 */
class SlackFrame extends Widget
{
    public $contentContainer;

    /**
     * @inheritdoc
     */
    public function run()
    {
        $url = Yii::$app->getModule('slack')->getServerUrl() . '/';
        return $this->render('slackframe', ['slackUrl' => $url]);
    }
}
