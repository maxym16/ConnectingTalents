<?php

/**
 * Lombardia Informatica S.p.A.
 * OPEN 2.0
 *
 * @see http://example.com Developers'community
 * @license GPLv3
 * @license https://opensource.org/licenses/gpl-3.0.html GNU General Public License version 3
 *
 * @package    lispa\amos\basic\template
 * @category   CategoryName
 * @author     Lombardia Informatica S.p.A.
 */

use Yii;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div id="bk-formDefaultLogin" class="bk-loginContainer">
    <h2><?= \Yii::$app->name ?></h2>
    <h4>Accedi alla piattaforma</h4>
    <hr class="bk-hrLogin">
    <p><?= Yii::t('amosplatform', 'Inserisci le credenziali per accedere'); ?></p>
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <?php if (\Yii::$app->params['template-amos']): ?>
            <?= $form->field($model, 'ruolo')->dropDownList(yii\helpers\ArrayHelper::map(Yii::$app->authManager->getRoles(), 'name', 'description')) ?>
            <?php endif; ?>
            <?= $form->field($model, 'username', ['inputOptions' => ['value' => 'demo']])->textInput(['readonly' => true]) ?>
            <?= $form->field($model, 'password', ['inputOptions' => ['value' => 'Demo1234']])->passwordInput(['readonly' => true]) ?>

            <div class="form-group">
                <!--<a class="col-xs-12 col-sm-6 bk-askPassword" href="forgot-password">Password dimenticata?</a>-->
                <?= Html::submitButton('Login', ['class' => 'btn btn-navigation-primary col-xs-12 col-sm-6 pull-right', 'name' => 'login-button']) ?>
            </div>

        </div>
    </div>
    <!--
<p class="bk-loginOr">oppure</p>

<div class="row">
<div class="col-xs-12 col-sm-6 col-md-6 bk-loginFb">
<span class="ti-facebook"></span><a href="#" class="">< ?= Yii::t('amosplatform', 'Connettiti con Facebook'); ?></a>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 bk-loginGoogle">
<span class="ti-google"></span><a href="#" class="">< ?= Yii::t('amosplatform', 'Connettiti con Google'); ?></a>
</div>
</div>

-->
    <?php ActiveForm::end(); ?>

</div>
</div>
