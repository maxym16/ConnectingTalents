<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SignupExtraForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="signup-extra-form-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true,'value'=> $user->username]) ?>
    <?= $form->field($model, 'cognome')->textInput(['maxlength' => true,'value'=> $user->surname]) ?>
    <?= $form->field($model, 'sesso')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => '']) ?>
    <?= $form->field($model, 'user_profile_age_group_id')->dropDownList(['1'=>'18-25','2'=>'26-35','3'=>'36-45','4'=>'46-55','5'=>'56-65','6'=>'>65']) ?>
    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'googleplus')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'linkedin')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'avatar_id')->textInput() ?>
    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'user_profile_role_id')->label('Role')->dropDownList(['13'=>'fan','14'=>'contributor','15'=>'partner','16'=>'sponsor']) ?>
    <?= $form->field($model, 'presentazione_breve')->label('Remote work')->dropDownList(['Yes'=>'Yes','No'=>'No','Maybe'=>'Maybe']) ?>
    <?= $form->field($model, 'presentazione_personale')->label('Effort')->dropDownList(['full-time'=>'full-time','part time'=>'part time','occasional'=>'occasional']) ?>

    <?= $form->field($model, 'email')->label('Change email')->input('email',['placeholder'=> $user->email]) ?>
    <?= $form->field($model, 'password')->label('Change password')->passwordInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
