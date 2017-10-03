<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="width:70%; margin: 0 auto">
    <div id="register" class="modal">
        <div class="modal__content modal__content--standalone register">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            <fieldset class="form">
                <div class="form-group">
                    <?= Html::activeLabel($model, 'username',['class'=>'form-group__title']); ?>
                    <?= Html::activeTextInput($model, 'username', ['class'=>'form-field']); ?>
                    <?= Html::error($model, 'username'); ?>
                </div>
                <div class="form-group">
                    <?= Html::activeLabel($model, 'surname',['class'=>'form-group__title']); ?>
                    <?= Html::activeTextInput($model, 'surname', ['class'=>'form-field']); ?>
                    <?= Html::error($model, 'surname'); ?>
                </div>
                <div class="form-group">
                    <?= Html::activeLabel($model, 'email',['class'=>'form-group__title']); ?>
                    <?= Html::activeInput('email' ,$model, 'email', ['class'=>'form-field']); ?>
                    <?= Html::error($model, 'email'); ?>
                </div>
                <div class="form-group">
                    <?= Html::activeLabel($model, 'password',['class'=>'form-group__title']); ?>
                    <?= Html::activeInput('password' ,$model, 'password', ['class'=>'form-field']); ?>
                    <?= Html::error($model, 'password'); ?>
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

<!--<div class="site-signup">
    <h1><?/*= Html::encode($this->title) */?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php /*$form = ActiveForm::begin(['id' => 'form-signup']); */?>

                <?/*= $form->field($model, 'username')->label('Name*')->textInput(['autofocus' => true]) */?>
                <?/*= $form->field($model, 'surname')->textInput() */?>
                <?/*= $form->field($model, 'email')->label('E-mail*') */?>
                <?/*= $form->field($model, 'password')->passwordInput() */?>

                <div class="form-group">
                    <?/*= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) */?>
                </div>

            <?php /*ActiveForm::end(); */?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <?php
/*            if (Yii::$app->getSession()->hasFlash('error')) {
                echo '<div class="alert alert-danger">'.Yii::$app->getSession()->getFlash('error').'</div>';
            }
            */?>
            <p class="lead">Access with your Social network account</p>
            <?php /*echo \nodge\eauth\Widget::widget(['action' => 'site/login']); */?>
        </div>
    </div>

</div>-->
