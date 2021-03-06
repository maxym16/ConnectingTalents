<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginExtraForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'ExtraLogin';
$this->params['breadcrumbs'][] = $this->title;
var_dump(\Yii::$app->user->isGuest);
$this->registerJsFile(
    '@web/assets/js/full-register.js',
    [
        'depends' => [\frontend\assets\CTAsset::className()],
        'position' => \yii\web\View::POS_END
    ]
);
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to extra-login:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <?php
            if (Yii::$app->getSession()->hasFlash('error')) {
                echo '<div class="alert alert-danger">'.Yii::$app->getSession()->getFlash('error').'</div>';
            }
            ?>
<!--            <p class="lead">Do you already have an account on one of these sites? Click the logo to log in with it here:</p>-->
            <p class="lead">Access with your Social network account</p>
            <?php echo \nodge\eauth\Widget::widget(['action' => 'site/extra-login']); ?>
        </div>
    </div>
</div>
