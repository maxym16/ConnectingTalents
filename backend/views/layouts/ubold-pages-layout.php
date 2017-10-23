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
    <body class="fixed-left">
    <?php $this->beginBody() ?>

    <!-- Begin page -->
    <div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">
        <?= $this->render('ubold-path/_top_bar') ?>
    </div>
    <!-- Top Bar End -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <?= $this->render('ubold-path/_sidebar_left') ?>
    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
            <?= $content ?>
            </div>
        </div> <!-- content -->

        <footer class="footer text-right">
            © <?= date('Y') ?>. All rights reserved.
        </footer>
    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

    <!-- Right Sidebar -->
    <div class="side-bar right-bar nicescroll">
        <?= $this->render('ubold-path/_sidebar_right') ?>
    </div>
    <!-- /Right-bar -->

    </div>
    <script>
        var resizefunc = [];
    </script>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>