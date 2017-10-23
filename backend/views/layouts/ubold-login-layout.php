<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;

\backend\assets\UboldAsset::register($this);
\backend\assets\UboldLteAsset::register($this);
\backend\assets\UboldFooterAsset::register($this);

?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="">
    <?php $this->beginBody() ?>

    <?= $content ?>

    <script>
        var resizefunc = [];
    </script>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>