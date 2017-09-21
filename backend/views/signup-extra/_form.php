<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
* @var yii\web\View $this
* @var common\models\SignupExtraForm $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="signup-extra-form-form">

    <?php $form = ActiveForm::begin([
    'id' => 'SignupExtraForm',
    'layout' => 'horizontal',
    'enableClientValidation' => true,
    'errorSummaryCssClass' => 'error-summary alert alert-danger'
    ]
    );
    ?>

    <div class="">
        <?php $this->beginBlock('main'); ?>

        <p>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'cognome')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'sesso')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => '']) ?>
    <?= $form->field($model, 'user_profile_age_group_id')->dropDownList(['1'=>'18-25','2'=>'26-35','3'=>'36-45','4'=>'46-55','5'=>'56-65','6'=>'>65']) ?>
    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'googleplus')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'linkedin')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'avatar_id')->textInput() ?>
    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'user_profile_role_id')->label('Role')->dropDownList(['13'=>'fan','14'=>'contributor','15'=>'partner','16'=>'sponsor']) ?>
    <?= $form->field($model, 'presentazione_breve')->label('Remote work')->dropDownList(['Yes'=>'Yes','No'=>'No','Maybe'=>'Maybe']) ?>
    <?= $form->field($model, 'presentazione_personale')->label('Effort')->dropDownList(['full-time'=>'full-time','part time'=>'part time','occasional'=>'occasional']) ?>
<!-- attribute email -->

<!-- attribute password -->
        </p>
        <?php $this->endBlock(); ?>
        
        <?=
    Tabs::widget(
                 [
                    'encodeLabels' => false,
                    'items' => [ 
                        [
    'label'   => Yii::t('models', 'SignupExtraForm'),
    'content' => $this->blocks['main'],
    'active'  => true,
],
                    ]
                 ]
    );
    ?>
        <hr/>

        <?php echo $form->errorSummary($model); ?>

        <?= Html::submitButton(
        '<span class="glyphicon glyphicon-check"></span> ' .
        ($model->isNewRecord ? 'Create' : 'Save'),
        [
        'id' => 'save-' . $model->formName(),
        'class' => 'btn btn-success'
        ]
        );
        ?>

        <?php ActiveForm::end(); ?>

    </div>

</div>

