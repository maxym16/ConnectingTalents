<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;


$this->params['breadcrumbs'][]= ['label' => 'I have an opportunity', 'url' => '/opport'];
$this->params['breadcrumbs'][]= ['label' => 'Insert opportunity','url' => '/insert-opport'];
$this->params['breadcrumbs'][]= ['label' => 'Lifecycle'];
$this->title = 'Connecting Talents | Lifecycle';

?>
<div class="insert-opport-lifecycle">

    <?php $form = yii\bootstrap\ActiveForm::begin(['layout' => 'horizontal']); ?>

        <?= $form->field($model, 'stage')->dropdownList([
            '1.Idea generation',
            '2.Prototyping',
            '3.Early adopters',
            '4.Paying users'],
            ['placeholder'=>'Lifecycle stage']); ?>
        <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            <div class="row">
                <div class="col-sm-6">
                    <div class="input-group">
                        <span class="group-field input-group-addon">
                            <select name="" id="">
                                <option value="">$</option>
                                <option value="">$</option>
                            </select>
                        </span>
                    <!--    < ? = Html::input($model, 'rev', null, ['class' => 'form-control', 'placeholder'=>'Livetime Rev (if any)']) ? >-->
                        <?= $form->field($model, 'rev')->textInput(['class' => 'form-control','placeholder'=>'Livetime Rev (if any)']) ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
                        <span class="group-field input-group-addon">
                            <select name="" id="">
                                <option value="">$</option>
                                <option value="">$</option>
                            </select>
                        </span>
                       <!-- < ? = Html::input($model, 'rev_month', null, ['class' => 'form-control', 'placeholder'=>'Rev Last Month (if any)']) ? >-->
                       <?= $form->field($model, 'rev_month')->textInput(['class' => 'form-control','placeholder'=>'Rev Last Month (if any)']) ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>

    <?php yii\bootstrap\ActiveForm::end(); ?>

</div><!-- insert-opport-summary -->
<?php
$script = <<< JS
    $('.group-field').hide();
    $('#lifecycle-stage').change(function() {
          var stage = $('#lifecycle-stage').val();
          if(stage == 3){
            $('.group-field').show();
          }else{
            $('.group-field').hide();
          }
    });
JS;
$this->registerJs($script, yii\web\View::POS_READY);