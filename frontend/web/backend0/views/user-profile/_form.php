<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UserProfile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-profile-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cognome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'codice_fiscale')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sesso')->dropDownList([ 'Maschio' => 'Maschio', 'Femmina' => 'Femmina', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'presentazione_breve')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'presentazione_personale')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'nascita_data')->textInput() ?>

    <?= $form->field($model, 'privacy')->textInput() ?>

    <?= $form->field($model, 'indirizzo_residenza')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cap_residenza')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numero_civico_residenza')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'domicilio_indirizzo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'domicilio_civico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'domicilio_cap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'domicilio_localita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'domicilio_lat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'domicilio_lon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'widgets_selected')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'nazionalita')->dropDownList([ 'Extra UE' => 'Extra UE', 'Italiana' => 'Italiana', 'UE' => 'UE', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'email_pec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'altri_dati_contatto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cellulare')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attivo')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'partita_iva')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'iban')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'twitter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'linkedin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'googleplus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ultimo_accesso')->textInput() ?>

    <?= $form->field($model, 'ultimo_logout')->textInput() ?>

    <?= $form->field($model, 'validato_almeno_una_volta')->textInput() ?>

    <?= $form->field($model, 'avatar_id')->textInput() ?>

    <?= $form->field($model, 'nascita_nazioni_id')->textInput() ?>

    <?= $form->field($model, 'nascita_province_id')->textInput() ?>

    <?= $form->field($model, 'nascita_comuni_id')->textInput() ?>

    <?= $form->field($model, 'user_profile_titoli_studio_id')->textInput() ?>

    <?= $form->field($model, 'user_profile_stati_civili_id')->textInput() ?>

    <?= $form->field($model, 'nazionalita_residenza_id')->textInput() ?>

    <?= $form->field($model, 'comune_residenza_id')->textInput() ?>

    <?= $form->field($model, 'provincia_residenza_id')->textInput() ?>

    <?= $form->field($model, 'domicilio_provincia_id')->textInput() ?>

    <?= $form->field($model, 'domicilio_comune_id')->textInput() ?>

    <?= $form->field($model, 'residenza_nazione_id')->textInput() ?>

    <?= $form->field($model, 'facilitatore_id')->textInput() ?>

    <?= $form->field($model, 'default_facilitatore')->textInput() ?>

    <?= $form->field($model, 'user_profile_area_id')->textInput() ?>

    <?= $form->field($model, 'user_profile_area_other')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_profile_role_id')->textInput() ?>

    <?= $form->field($model, 'user_profile_role_other')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_profile_age_group_id')->textInput() ?>

    <?= $form->field($model, 'prevalent_partnership_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'deleted_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <?= $form->field($model, 'deleted_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
