<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->params['breadcrumbs'][]= ['label' => 'I have an opportunity', 'url' => '/opport'];
$this->params['breadcrumbs'][]= ['label' => 'Insert opportunity','url' => '/insert-opport'];
$this->params['breadcrumbs'][]= ['label' => 'Opportuning Summary'];
$this->title = 'Connecting Talents | Opportuning Summary';

?>
<div class="insert-opport-summary">
    <?php $form = yii\bootstrap\ActiveForm::begin(['layout' => 'horizontal']); ?>

        <?= $form->field($model, 'description') ?>
        <?= $form->field($model, 'date')->input('date') ?>
        <?= $form->field($model, 'incorp')->checkbox(); ?>
        <?= $form->field($model, 'based') ?>
        <?= $form->field($model, 'markets') ?>
        <div class="form-group">
            <label class="control-label col-sm-3" for="">Links*</label>
            <div class="col-sm-6">
                <?php
                    $social_networks = ['website', 'facebook', 'twitter', 'linkedin'];
                    foreach ($social_networks as $item){
                        ?>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><?= $item ?></span>
                                    <?= Html::input('text', "links[$item]", null, ['class' => 'form-control']); ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php yii\bootstrap\ActiveForm::end(); ?>

</div><!-- insert-opport-summary -->
