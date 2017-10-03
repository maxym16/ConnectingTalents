<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Payment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'account')->textInput() ?>
    <?= $form->field($model, 'user_id')->hiddenInput(['value'=> $user->id])->label(false) ?>
    <?= $form->field($model, 'validity')->textInput() ?>
    <?= $form->field($model, 'cvv')->textInput() ?>
    <?= $form->field($model, 'payment')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'date')->label(false)->hiddenInput(['value' => date("Y-m-d h:i:s")]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
