<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\SignupExtraForm */

$this->title = 'Create personal data';
//$this->params['breadcrumbs'][] = ['label' => 'Signup Extra Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile(
    '@web/assets/js/full-register.js',
    [
        'depends' => [\frontend\assets\CTAsset::className()],
        'position' => \yii\web\View::POS_END
    ]
);
?>
<div class="register">
    <h1 class="register__title"><?= Html::encode($this->title) ?></h1>
    <div class="register__inner">
        <?= $this->render('_form', [
            'model' => $model, 'user' => $user,
        ]) ?>
    </div>
</div>