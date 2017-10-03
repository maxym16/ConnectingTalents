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

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="width:70%; margin: 0 auto">
<div id="register" class="modal">
    <div class="modal__content modal__content--standalone register">
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <fieldset class="form">
                <div class="form-group">
                    <?= Html::activeLabel($model, 'username',['class'=>'form-group__title']); ?>
                    <?= Html::activeTextInput($model, 'username', ['class'=>'form-field']); ?>
                    <?= Html::error($model, 'username'); ?>
                </div>
                <div class="form-group">
                    <?= Html::activeLabel($model, 'password',['class'=>'form-group__title']); ?>
                    <?= Html::activeInput('password' ,$model, 'password', ['class'=>'form-field']); ?>
                    <?= Html::error($model, 'password'); ?>
                </div>
                <div class="form-group">
                    <?= Html::activeCheckbox($model, 'rememberMe', ['class'=>'']); ?>
                </div>
                <!--<div class="form__captcha">
                    <div id="register-captcha"></div>
                </div>-->
                <div class="form__table">
                    <div class="form__cell">
                        <button class="form__button" type="submit">Join now</button>
                    </div>
                    <div class="form__cell">
                        <span class="form__or">or</span>
                    </div>
                    <div class="form__cell">
                        <div class="form__socials">
                            <?= \nodge\eauth\Widget::widget(['action' => 'site/login']); ?>
                        </div>
                    </div>
                </div>
            </fieldset>
        <?php ActiveForm::end(); ?>
        <div class="register__agreement">
            By clicking Join now, you agree to Connecting Talent’s User<br />Agreement, Privacy Policy and Cookie Policy.
        </div>
    </div>
</div>
</div>

<!--<div class="site-login">-->
<!--    <h1>< ? = Html::encode($this->title) ? ></h1>-->
<!---->
<!--    <p>Please fill out the following fields to login:</p>-->
<!---->
<!--    <div class="row">-->
<!--        <div class="col-lg-5">-->
<!--            < ? php //$form = ActiveForm::begin(['id' => 'login-form']); ?>
<!---->
<!--                < ? //= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
<!---->
<!--                < ? //= $form->field($model, 'password')->passwordInput() ?>
<!---->
<!--                < ? //= $form->field($model, 'rememberMe')->checkbox() ?>
<!---->
<!--                <div style="color:#999;margin:1em 0">-->
<!--                    If you forgot your password you can --><?//= Html::a('reset it', ['site/request-password-reset']) ?><!--.-->
<!--                </div>-->
<!---->
<!--                <div class="form-group">-->
<!--                    < ? = Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
<!--                </div>-->
<!---->
<!--            < ? php //ActiveForm::end(); ?>
<!--        </div>-->
<!--    </div>-->
<!--    <div class="row">-->
<!--        <div class="col-lg-5">-->
<!--            < ? php
//            if (Yii::$app->getSession()->hasFlash('error')) {
//                echo '<div class="alert alert-danger">'.Yii::$app->getSession()->getFlash('error').'</div>';
//            }
//            ?>
<!--            <p class="lead">Do you already have an account on one of these sites? Click the logo to log in with it here:</p>-->
<!--            <p class="lead">Access with your Social network account</p>-->
<!--            < ? php //echo \nodge\eauth\Widget::widget(['action' => 'site/login']); ?>
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
