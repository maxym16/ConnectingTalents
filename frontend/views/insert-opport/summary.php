<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->params['breadcrumbs'][]= ['label' => 'I have an opportunity', 'url' => Url::previous()];
$this->params['breadcrumbs'][]= ['label' => 'Insert opportunity','url' => '/insert-opport'];
$this->params['breadcrumbs'][]= ['label' => 'Opportuning Summary'];
$this->title = 'Connecting Talents | Opportuning Summary';

?>
<div class="insert-opport-summary">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'description') ?>
        <?= $form->field($model, 'date')->input('date') ?>
        <?= $form->field($model, 'incorp')->checkbox(); ?>
        <?= $form->field($model, 'based') ?>
        <?= $form->field($model, 'markets') ?>
        <?= $form->field($model, 'links') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- insert-opport-summary -->
