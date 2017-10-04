<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SignupExtraForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="signup-extra-form-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cognome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sesso')->dropDownList([ 'Maschio' => 'Maschio', 'Femmina' => 'Femmina', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'presentazione_breve')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'presentazione_personale')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'linkedin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'googleplus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'avatar_id')->textInput() ?>

    <?= $form->field($model, 'user_profile_role_id')->textInput() ?>

    <?= $form->field($model, 'user_profile_age_group_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
