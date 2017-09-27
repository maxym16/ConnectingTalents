<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SignupExtraForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="signup-extra-form-form">

    <?php $form = ActiveForm::begin(['id' => 'signup-extra-form', 'options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nome')->label('Name*')->textInput(['value'=> $user->username]) ?>
    <?= $form->field($model, 'cognome')->label('Surname*')->textInput(['value'=> $user->surname]) ?>
    <?= $form->field($model, 'sesso')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => '']) ?>
    <?= $form->field($model, 'user_profile_age_group_id')->dropDownList(['1'=>'18-25','2'=>'26-35','3'=>'36-45','4'=>'46-55','5'=>'56-65','6'=>'>65']) ?>
    <hr>
    <p>Contact details</p>
    <?= $form->field($model, 'email_pec')->label('E-mail')->input('email',['value'=> $user->email]) ?>
    <?= $form->field($model, 'telefono')->label('Telephone') ?>
    <?= $form->field($model, 'facebook') ?>
    <?= $form->field($model, 'googleplus') ?>
    <?= $form->field($model, 'linkedin') ?>
    <hr>
    <?php
        if(isset($model->image) && file_exists(Yii::getAlias('@webroot', $model->image)))
        { 
            echo Html::img($model->image, ['class'=>'img-responsive']);
            echo $form->field($model,'del_img')->checkBox(['class'=>'span-1']);
        }
    ?>
    <?= $form->field($model, 'file')->label('Photo')->fileInput() ?>
<!--    < ? = $form->field($model, 'image')->label('Photo')->textInput() ? >-->
    <?= $form->field($model, 'note')->textarea(['rows' => 5]) ?>
    <hr><hr>
    <?= $form->field($model, 'purpos')->label('Purposes')->dropDownList(['Business'=>'Business','Non-profit'=>'Non-profit','Idea/Passion'=>'Idea/Passion']) ?>
    <?= $form->field($model, 'expl')->label('Explaination of purposes')->textarea(['rows' => 2]) ?>
    <hr><hr>
    <?= $form->field($model, 'user_profile_role_id')->label('Role')->dropDownList(['13'=>'fan','14'=>'contributor','15'=>'partner','16'=>'sponsor']) ?>
    <?= $form->field($model, 'presentazione_breve')->label('Remote work')->dropDownList(['Yes'=>'Yes','No'=>'No','Maybe'=>'Maybe']) ?>
    <?= $form->field($model, 'presentazione_personale')->label('Effort')->dropDownList(['full-time'=>'full-time','part time'=>'part time','occasional'=>'occasional']) ?>
    <hr>
    <?= $form->field($model, 'sharing')->dropDownList(['0'=>'No','1'=>'Yes']) ?>
    <hr>
    <?= $form->field($model, 'email')->label('Change email (if you want)')->input('email',['value'=> $user->email]) ?>
    <?= $form->field($model, 'password')->label('Change password (if you want)')->passwordInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
