<?php
/**
 * @var $model \common\models\User
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<?php $form = ActiveForm::begin(['enableClientScript' => false]); ?>
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
    <?= Html::activeInput('email', $model, 'email', ['class'=>'form-control', 'value'=> $model->email, 'placeholder' => 'Email', 'readonly' => '']); ?>
</div>
<div class="form-group">
    <button class="btn btn-success waves-effect waves-light" >
        <span class="btn-label"><i class="fa fa-save"></i></span>Save changes
    </button>
</div>
<?= Html::hiddenInput('update_type', 'basic') ?>
<?php ActiveForm::end(); ?>