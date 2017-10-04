<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'slug')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'titolo')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'sottotitolo')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'descrizione_breve')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'descrizione')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'metakey')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'metadesc')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'primo_piano')->textInput() ?>
    <?= $form->field($model, 'immagine')->textInput() ?>
    <?= $form->field($model, 'hits')->textInput() ?>
    <?= $form->field($model, 'abilita_pubblicazione')->textInput() ?>
    <?= $form->field($model, 'in_evidenza')->textInput() ?>
    <?= $form->field($model, 'data_pubblicazione')->textInput() ?>
    <?= $form->field($model, 'data_rimozione')->textInput() ?>
    <?= $form->field($model, 'news_categorie_id')->textInput() ?>
    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'comments_enabled')->textInput() ?>
    <?= $form->field($model, 'created_at')->textInput() ?>
    <?= $form->field($model, 'updated_at')->textInput() ?>
    <?= $form->field($model, 'deleted_at')->textInput() ?>
    <?= $form->field($model, 'created_by')->textInput() ?>
    <?= $form->field($model, 'updated_by')->textInput() ?>
    <?= $form->field($model, 'deleted_by')->textInput() ?>
    <?= $form->field($model, 'version')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
