<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->params['breadcrumbs'][]= ['label' => 'I have an opportunity', 'url' => Url::previous()];
$this->params['breadcrumbs'][]= ['label' => 'Insert opportunity','url' => '/insert-opport'];
$this->params['breadcrumbs'][]= ['label' => 'Lifecycle'];
$this->title = 'Connecting Talents | Lifecycle';

?>
<div class="insert-opport-lifecycle">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>

        <?= $form->field($model, 'stage')->dropdownList([
            '1.Idea generation',
            '2.Prototyping',
            '3.Early adopters',
            '4.Paying users'],
            ['prompt'=>'Lifecycle stage']); ?>
        <?= $form->field($model, 'rev')->textInput(['placeholder' => '$']) ?>
        <?= $form->field($model, 'rev_month')->textInput(['placeholder' => '$']) ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- insert-opport-summary -->
