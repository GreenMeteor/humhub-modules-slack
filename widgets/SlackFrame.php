<?php
namespace humhub\modules\slack\widgets;

use humhub\components\Widget;

class SlackFrame extends Widget
{

    public $contentContainer;

    public function run()
    {
        return $this->render('slackframe', []);
    }
}
