<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form color-admin">

    <?php $form = ActiveForm::begin(['enableClientScript' => false]); 
    ?>
    
<div class="form-group">
    <label for="username-field-id">Name*</label>
    <?= Html::activeTextInput($model, 'username', ['class'=>'form-control', 'value'=> $model->username, 'placeholder' => 'Name']); ?>
</div>
<div class="form-group">
    <label for="username-field-id">Surname*</label>
    <?= Html::activeTextInput($model, 'surname', ['class'=>'form-control', 'value'=> $model->surname, 'placeholder' => 'Surname']); ?>
</div>
<div class="form-group">
    <label for="username-field-id">Email*</label>
    <?= Html::activeInput('email', $model, 'email', ['class'=>'form-control', 'value'=> $model->email, 'placeholder' => 'Email']); ?>
</div>
<div class="form-group">
    <label for="username-field-id">Role</label>
    <?php
    $array_roles=yii\helpers\ArrayHelper::map(Yii::$app->authManager->roles,'name','description');
    $model->role='user_1';
    ?>
    <?= Html::activeDropDownList($model, 'role', $array_roles) ?>
</div>

<!--    < ?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
    < ?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>
    < ?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    < ?= $form->field($model, 'role')->textInput(['maxlength' => true]) ?>-->
<!--    < ?= $form->field($model, 'status')->textInput() ?>-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
