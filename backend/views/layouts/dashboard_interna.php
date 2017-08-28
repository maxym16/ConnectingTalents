<?php
use yii\helpers\Html;
use yii\helpers\Url;

//\bedezign\yii2\audit\web\JSLoggingAsset::register($this);
/* @var $this \yii\web\View */
/* @var $content string */

$urlCorrente = Url::current();
$arrayUrl = explode('/', $urlCorrente);
$countArrayUrl = count($arrayUrl);
$percorso = '';
$i = 0;
$moduloId = Yii::$app->controller->module->id;
$basePath = Yii::$app->getBasePath();
if ($moduloId != 'app-backend') {
    $percorso .= '/modules/' . $moduloId . '/views/' . $arrayUrl[$countArrayUrl - 2];
} else {
    $percorso .= 'views';
    while ($i < ($countArrayUrl - 1)) {
        $percorso .= $arrayUrl[$i] . '/';
        $i++;
    }
}
if ($countArrayUrl) {
    $posizioneEsclusione = strpos($arrayUrl[$countArrayUrl - 1], '?');
    if ($posizioneEsclusione > 0) {
        $vista = substr($arrayUrl[$countArrayUrl - 1], 0, $posizioneEsclusione);
    } else {
        $vista = $arrayUrl[$countArrayUrl - 1];
    }
    if (file_exists($basePath . '/' . $percorso . '/help/' . $vista . '.php')) {
        $this->params['help'] = [
            'filename' => $vista
        ];
    }
    if (file_exists($basePath . '/' . $percorso . '/intro/' . $vista . '.php')) {
        $this->params['intro'] = [
            'filename' => $vista
        ];
    }
}
?>

<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <?= $this->render("parts" . DIRECTORY_SEPARATOR . "head"); ?>
    </head>
    <body>

        <?php $this->beginBody() ?>

        <div class="container-header">
            <?= $this->render("parts" . DIRECTORY_SEPARATOR . "header"); ?>
        </div>
        <div class="container-logo">
            <?= $this->render("parts" . DIRECTORY_SEPARATOR . "logo"); ?>
        </div>
        <div class="container-messages dashboard">
            <div class="container">
                <?= $this->render("parts" . DIRECTORY_SEPARATOR . "messages"); ?> 
            <?= $this->render("parts" . DIRECTORY_SEPARATOR . "breadcrumb"); ?>
            </div>
        </div>
        <section id="bk-page">        

            <!--<div class="container-help">
                    <div class="container">
                    < ?= $this->render("parts" . DIRECTORY_SEPARATOR . "help"); ?>
                </div>
            </div>-->

            <!--div class="page-header">
                <div class="container">
                    <h1>< ?php /* Html::encode($this->title) */ ?></h1>
                </div>
            </div-->

            <div class="dashboard-content">

                <?= $content ?>

            </div>      

        </section>


        <?= $this->render("parts" . DIRECTORY_SEPARATOR . "footer"); ?>

        <?php $this->endBody() ?>

    </body>
</html>
<?php $this->endPage() ?>