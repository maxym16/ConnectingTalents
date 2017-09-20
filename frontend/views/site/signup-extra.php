<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UserProfile */
/* @var $form ActiveForm */
//var_dump($model);
//echo '<pre>' . print_r($model, true) . '</pre>';
//debug($model);
?>
<div class="site-signup-extra">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'nome')->label('Name') ?>
        <?= $form->field($model, 'cognome')->label('Surname') ?>
        <?= $form->field($model, 'sesso')->label('Sex')->listBox(['1'=>'male','2'=>'female']) ?>
        <?= $form->field($model, 'user_profile_age_group_id')->label('Age')->dropDownList(['1'=>'18-25','2'=>'26-35','3'=>'36-45','4'=>'46-55','5'=>'56-65','6'=>'>65']) ?>
        <?= $form->field($model, 'telefono')->label('Phone') ?>
        <?= $form->field($model, 'facebook')->label('facebook') ?>
        <?= $form->field($model, 'googleplus')->label('googleplus') ?>
        <?= $form->field($model, 'linkedin')->label('linkedin') ?>
        <?= $form->field($model, 'avatar_id')->label('Photo') ?>
        <?= $form->field($model, 'note')->label('About me')->textarea(['rows'=>5]) ?>
        <?= $form->field($model, 'user_profile_role_id')->label('Role')->dropDownList(['1'=>'fan','2'=>'contributor','3'=>'partner','4'=>'sponsor']) ?>
        <?= $form->field($model, 'presentazione_breve')->label('Remote work')->dropDownList(['1'=>'Yes','2'=>'No','3'=>'Maybe']) ?>
        <?= $form->field($model, 'presentazione_personale')->label('Effort')->dropDownList(['1'=>'full-time','2'=>'part time','3'=>'occasional']) ?>

    <!--    < ? = $form->field($model, 'email')->label('Change email') ? >
        < ? = $form->field($model, 'password')->label('Change password')->passwordInput() ? >-->
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-signup-extra -->
