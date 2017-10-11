<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-container">
        <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
        <fieldset class="form">
            <div class="form-group">
                <?= Html::activeLabel($model, 'username',['class'=>'form-group__title']); ?>
                <?= Html::activeTextInput($model, 'username', ['class'=>'form-field']); ?>
                <?= Html::error($model, 'username', ['class'=>'validation-notice']); ?>
            </div>
            <div class="form-group">
                <?= Html::activeLabel($model, 'surname',['class'=>'form-group__title']); ?>
                <?= Html::activeTextInput($model, 'surname', ['class'=>'form-field']); ?>
                <?= Html::error($model, 'surname', ['class'=>'validation-notice']); ?>
            </div>
            <div class="form-group">
                <?= Html::activeLabel($model, 'email',['class'=>'form-group__title']); ?>
                <?= Html::activeInput('email' ,$model, 'email', ['class'=>'form-field']); ?>
                <?= Html::error($model, 'email', ['class'=>'validation-notice', 'encode' => false]); ?>
            </div>
            <div class="form-group">
                <?= Html::activeLabel($model, 'password',['class'=>'form-group__title']); ?>
                <?= Html::activeInput('password' ,$model, 'password', ['class'=>'form-field']); ?>
                <?= Html::error($model, 'password', ['class'=>'validation-notice']); ?>
            </div>
            <div class="form__captcha">
                <?php if(isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response'] == ''): ?>
                    <div class="validation-notice">Captcha error</div>
                <?php endif; ?>
                <div class="g-recaptcha" data-sitekey="6LcI2jIUAAAAAKIh7rZLgjSVwECzbKVWlwkAtNpb"></div>
            </div>
            <div class="form__table">
                <div class="form__cell">
                    <button class="form__button" type="submit">Join now</button>
                </div>
                <div class="form__cell">
                    <span class="form__or">or</span>
                </div>
                <div class="form__cell">
                    <div class="form__socials">
                        <?= \common\widgets\Social::widget(['action' => 'site/login']); ?>
                    </div>
                </div>
            </div>
        </fieldset>
        <?php ActiveForm::end(); ?>
        <div class="register__agreement">
            By clicking Join now, you agree to Connecting Talent’s User<br />
            <a href="<?= Url::to(['site/agreement']) ?>"><span class="bold underline">Agreement</span></a>
            ,
            <a href="<?= Url::to(['site/privacy']) ?>"><span class="bold underline nowrap">Privacy Policy</span></a>
            and
            <a href="<?= Url::to(['site/cookie']) ?>"><span class="bold underline nowrap">Cookie Policy</span></a>
            .
        </div>
        <div class="register__password-remind">
            <span class="light">
                If you forgot your password you can
                <?= Html::a('reset it', ['site/request-password-reset'], ['class'=>'underline']) ?>
            </span>
        </div>
</div>
