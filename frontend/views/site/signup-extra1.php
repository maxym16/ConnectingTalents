<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UserProfile */
/* @var $form ActiveForm */
?>
<div class="site-signup-extra">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'nome') ?>
        <?= $form->field($model, 'cognome') ?>
        <?= $form->field($model, 'sesso') ?>
        <?= $form->field($model, 'presentazione_personale') ?>
        <?= $form->field($model, 'widgets_selected') ?>
        <?= $form->field($model, 'nazionalita') ?>
        <?= $form->field($model, 'altri_dati_contatto') ?>
        <?= $form->field($model, 'note') ?>
        <?= $form->field($model, 'nascita_data') ?>
        <?= $form->field($model, 'ultimo_accesso') ?>
        <?= $form->field($model, 'ultimo_logout') ?>
        <?= $form->field($model, 'created_at') ?>
        <?= $form->field($model, 'updated_at') ?>
        <?= $form->field($model, 'deleted_at') ?>
        <?= $form->field($model, 'privacy') ?>
        <?= $form->field($model, 'attivo') ?>
        <?= $form->field($model, 'validato_almeno_una_volta') ?>
        <?= $form->field($model, 'avatar_id') ?>
        <?= $form->field($model, 'nascita_nazioni_id') ?>
        <?= $form->field($model, 'nascita_province_id') ?>
        <?= $form->field($model, 'nascita_comuni_id') ?>
        <?= $form->field($model, 'user_profile_titoli_studio_id') ?>
        <?= $form->field($model, 'user_profile_stati_civili_id') ?>
        <?= $form->field($model, 'nazionalita_residenza_id') ?>
        <?= $form->field($model, 'comune_residenza_id') ?>
        <?= $form->field($model, 'provincia_residenza_id') ?>
        <?= $form->field($model, 'domicilio_provincia_id') ?>
        <?= $form->field($model, 'domicilio_comune_id') ?>
        <?= $form->field($model, 'residenza_nazione_id') ?>
        <?= $form->field($model, 'facilitatore_id') ?>
        <?= $form->field($model, 'default_facilitatore') ?>
        <?= $form->field($model, 'user_profile_area_id') ?>
        <?= $form->field($model, 'user_profile_role_id') ?>
        <?= $form->field($model, 'user_profile_age_group_id') ?>
        <?= $form->field($model, 'prevalent_partnership_id') ?>
        <?= $form->field($model, 'user_id') ?>
        <?= $form->field($model, 'created_by') ?>
        <?= $form->field($model, 'updated_by') ?>
        <?= $form->field($model, 'deleted_by') ?>
        <?= $form->field($model, 'presentazione_breve') ?>
        <?= $form->field($model, 'indirizzo_residenza') ?>
        <?= $form->field($model, 'numero_civico_residenza') ?>
        <?= $form->field($model, 'domicilio_indirizzo') ?>
        <?= $form->field($model, 'domicilio_localita') ?>
        <?= $form->field($model, 'email_pec') ?>
        <?= $form->field($model, 'telefono') ?>
        <?= $form->field($model, 'cellulare') ?>
        <?= $form->field($model, 'fax') ?>
        <?= $form->field($model, 'status') ?>
        <?= $form->field($model, 'facebook') ?>
        <?= $form->field($model, 'twitter') ?>
        <?= $form->field($model, 'linkedin') ?>
        <?= $form->field($model, 'googleplus') ?>
        <?= $form->field($model, 'user_profile_area_other') ?>
        <?= $form->field($model, 'user_profile_role_other') ?>
        <?= $form->field($model, 'codice_fiscale') ?>
        <?= $form->field($model, 'cap_residenza') ?>
        <?= $form->field($model, 'domicilio_lat') ?>
        <?= $form->field($model, 'domicilio_lon') ?>
        <?= $form->field($model, 'domicilio_civico') ?>
        <?= $form->field($model, 'domicilio_cap') ?>
        <?= $form->field($model, 'partita_iva') ?>
        <?= $form->field($model, 'iban') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-signup-extra -->
