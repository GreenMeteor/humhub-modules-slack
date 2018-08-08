<?php

namespace humhub\modules\slack;

use Yii;
use yii\helpers\Url;
use humhub\modules\slack\widgets\SlackFrame;
use humhub\models\Setting;

class Events extends \yii\base\BaseObject
{
    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        $event->sender->addItem([
            'label' => Yii::t('SlackModule.base', 'Slack Settings'),
            'url' => Url::toRoute('/slack/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fa fa-slack"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'slack' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }
public static function addSlackFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->view->registerAssetBundle(Assets::className());
        $event->sender->addWidget(SlackFrame::className(), [], [
            'sortOrder' => Setting::Get('timeout', 'slack')
        ]);
    }
}