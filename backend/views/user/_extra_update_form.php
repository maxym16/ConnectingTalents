<?php
/**
 * @var $model \common\models\UserProfile
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<?php $form = ActiveForm::begin(['enableClientScript' => false]); ?>
<div class="form-group">
    <label for="username-field-id">Name*</label>
    <?= Html::activeTextInput($model, 'nome', ['class'=>'form-control', 'value'=> $model->nome, 'placeholder' => 'Name']); ?>
</div>
<div class="form-group">
    <label for="username-field-id">Surname*</label>
    <?= Html::activeTextInput($model, 'cognome', ['class'=>'form-control', 'value'=> $model->cognome, 'placeholder' => 'Surname']); ?>
</div>
<div class="form-group">
    <label for="username-field-id">Email*</label>
    <?= Html::activeInput('email', $model, 'email_pec', ['class'=>'form-control', 'value'=> $model->email_pec, 'placeholder' => 'Email/PEC', 'readonly' => '']); ?>
</div>
<div class="form-group">
    <button class="btn btn-success waves-effect waves-light" >
        <span class="btn-label"><i class="fa fa-save"></i></span>Save changes
    </button>
</div>
<?= Html::hiddenInput('update_type', 'extra') ?>
<?php ActiveForm::end(); ?>