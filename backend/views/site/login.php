<?php
//use Yii;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
//$this->class = '';

?>

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class=" card-box">
        <div class="panel-heading">
            <h3 class="text-center"> Sign In to <strong class="text-custom">Connecting Talents</strong> </h3>
        </div>


        <div class="panel-body">
            <?php
            $form = ActiveForm::begin(['id' => 'login-form', 'enableClientScript' => false, 'options' => ['class' => 'form-horizontal m-t-20']]);
            ?>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <?= Html::activeInput('email', $model, 'email', ['class'=>'form-control', 'placeholder' => 'Email']); ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <?= Html::activeInput('password', $model, 'password', ['class'=>'form-control', 'placeholder' => 'Password']); ?>
                    </div>
                </div>

<!-- ///               <div class="form-group">
                    <div class="col-xs-12">
                        < ?= \himiklab\yii2\recaptcha\ReCaptcha::widget(['name' => 'reCaptcha']) ?>
                    </div>
                </div>
-->
                <div class="form-group ">
                    <div class="col-xs-12">
<!--   ///                     <div class="checkbox checkbox-primary">
                            < ?= Html::activeCheckbox($model, 'rememberMe', ['id'=>'checkbox-signup']); ?>
                        </div>
-->
                    </div>
                </div>

                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light">Log In</button>
                    </div>
                </div>

                    <div class="form-group m-t-30 m-b-0">
                        <div class="col-sm-12">
                            <a href="page-recoverpw.html" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                        </div>
                    </div>
                <?php ActiveForm::end(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-center">
            <p>Don't have an account? <a href="page-register.html" class="text-primary m-l-5"><b>Sign Up</b></a></p>
        </div>
    </div>

</div>



