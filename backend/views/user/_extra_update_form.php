<?php
/**
 * @var $model \common\models\UserProfile
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\CountriesList;

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
    <label for="username-field-id">Gender</label>
    <?= Html::activeDropDownList($model, 'sesso', [1=>'Male',2=>'Female']) ?>
</div>
<div class="form-group">
    <label for="username-field-id">Age</label>
    <?= Html::activeRadioList($model, 'user_profile_age_group_id', [1=>'18-25',2=>'26-35',3=>'36-45',4=>'46-55',5=>'56-65',6=>'>65']) ?>
</div>
<div class="form-group">
    <label for="username-field-id">Country</label>
    <?php
    $country_list = CountriesList::countries;
    ?>
    <?= Html::activeDropDownList($model, 'country', $country_list) ?>
</div>
<div class="form-group">
    <label for="username-field-id">City</label>
    <?= Html::activeTextInput($model, 'city', ['class'=>'form-control', 'value'=> $model->city, 'placeholder' => 'City']); ?>
</div>
<div class="form-group">
    <label for="username-field-id">Phone</label>
    <?= Html::activeTextInput($model, 'telefono', ['class'=>'form-control', 'value'=> $model->telefono, 'placeholder' => 'Phone']); ?>
</div>
<div class="form-group">
    <label for="username-field-id">Linkedin</label>
    <?= Html::activeTextInput($model, 'linkedin', ['class'=>'form-control', 'value'=> $model->linkedin, 'placeholder' => 'Linkedin']); ?>
</div>
<div class="form-group">
    <label for="username-field-id">Facebook</label>
    <?= Html::activeTextInput($model, 'facebook', ['class'=>'form-control', 'value'=> $model->facebook, 'placeholder' => 'Facebook']); ?>
</div>
<div class="form-group">
    <label for="username-field-id">Googleplus</label>
    <?= Html::activeTextInput($model, 'googleplus', ['class'=>'form-control', 'value'=> $model->googleplus, 'placeholder' => 'Googleplus']); ?>
</div>
<div class="form-group">
    <label for="username-field-id">Description</label>
    <?= Html::activeTextInput($model, 'presentazione_personale', ['class'=>'form-control', 'value'=> $model->presentazione_personale, 'placeholder' => 'Description']); ?>
</div>
<div class="form-group">
    <label for="username-field-id">Remote work</label>
    <?= Html::activeDropDownList($model, 'remote_work', [''=>'','Yes'=>'Yes','No'=>'No','Maybe'=>'Maybe']) ?>
</div>
<div class="form-group">
    <label for="username-field-id">Effort</label>
    <?= Html::activeDropDownList($model, 'effort', [''=>'','full-time'=>'full-time','part time'=>'part time','occasional'=>'occasional']) ?>
</div>

<div class="form-group">
    <button class="btn btn-success waves-effect waves-light" >
        <span class="btn-label"><i class="fa fa-save"></i></span>Save changes
    </button>
</div>
<?= Html::hiddenInput('update_type', 'extra') ?>
<?php ActiveForm::end(); ?>