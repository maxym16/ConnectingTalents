<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Team */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="team-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'owner')->hiddenInput(['value' => $user_id])->label(false) ?>
    <?= $form->field($model, 'owner_opport')->hiddenInput(['value' => $user_id])->label(false) ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'date')->label(false)->hiddenInput(['value' => date("Y-m-d h:i:s")]) ?>
    <?= $form->field($model, 'type')->textInput(['value' => 1]) ?>
    <?= $form->field($model, 'joined_team_id')->textInput() ?>
    <?= $form->field($model, 'team_role_id')->textInput(['value' => 1]) ?>
    <?= $form->field($model, 'parent_id')->textInput(['value' => 0]) ?>
    <?= $form->field($model, 'visible')->textInput() ?>
    <?= $form->field($model, 'status')->label(false)->hiddenInput(['value' => 1]) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
