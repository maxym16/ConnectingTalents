<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\FeedbackFeed */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="feedback-feed-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'agree')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'surprised')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'recommend')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
