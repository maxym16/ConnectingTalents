<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Payment */
/* @var $form ActiveForm */
?>
<div class="index">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'account') ?>
        <?= $form->field($model, 'user_id') ?>
        <?= $form->field($model, 'validity') ?>
        <?= $form->field($model, 'cvv') ?>
        <?= $form->field($model, 'payment') ?>
        <?= $form->field($model, 'date') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- index -->
