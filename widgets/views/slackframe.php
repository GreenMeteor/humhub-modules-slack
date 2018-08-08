<?php

use yii\helpers\Url;
use humhub\libs\Html;
use humhub\models\Setting;

\humhub\modules\slack\Assets::register($this);
?>

<?= Html::beginTag('div') ?>
<script src="<?= $slackUrl; ?>" async></script>
<?= Html::endTag('div'); ?>
