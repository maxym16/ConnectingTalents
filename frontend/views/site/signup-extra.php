<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UserProfile */
/* @var $form ActiveForm */
//var_dump($model);
echo '<pre>' . print_r($model, true) . '</pre>';
?>
<div class="site-signup-extra">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'nome') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-signup-extra -->
