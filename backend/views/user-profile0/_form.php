<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
* @var yii\web\View $this
* @var common\models\UserProfile $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="user-profile-form">

    <?php $form = ActiveForm::begin([
    'id' => 'UserProfile',
    'layout' => 'horizontal',
    'enableClientValidation' => true,
    'errorSummaryCssClass' => 'error-summary alert alert-danger'
    ]
    );
    ?>

    <div class="">
        <?php $this->beginBlock('main'); ?>

        <p>
            

<!-- attribute nome -->
			<?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

<!-- attribute cognome -->
			<?= $form->field($model, 'cognome')->textInput(['maxlength' => true]) ?>

<!-- attribute sesso -->
			<?= $form->field($model, 'sesso')->dropDownList([ 'Maschio' => 'Maschio', 'Femmina' => 'Femmina', ], ['prompt' => '']) ?>

<!-- attribute presentazione_personale -->
			<?= $form->field($model, 'presentazione_personale')->textarea(['rows' => 6]) ?>

<!-- attribute widgets_selected -->
			<?= $form->field($model, 'widgets_selected')->textarea(['rows' => 6]) ?>

<!-- attribute nazionalita -->
			<?= $form->field($model, 'nazionalita')->dropDownList([ 'Extra UE' => 'Extra UE', 'Italiana' => 'Italiana', 'UE' => 'UE', ], ['prompt' => '']) ?>

<!-- attribute altri_dati_contatto -->
			<?= $form->field($model, 'altri_dati_contatto')->textarea(['rows' => 6]) ?>

<!-- attribute note -->
			<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

<!-- attribute nascita_data -->
			<?= $form->field($model, 'nascita_data')->textInput() ?>

<!-- attribute ultimo_accesso -->
			<?= $form->field($model, 'ultimo_accesso')->textInput() ?>

<!-- attribute ultimo_logout -->
			<?= $form->field($model, 'ultimo_logout')->textInput() ?>

<!-- attribute created_at -->
			<?= $form->field($model, 'created_at')->textInput() ?>

<!-- attribute updated_at -->
			<?= $form->field($model, 'updated_at')->textInput() ?>

<!-- attribute deleted_at -->
			<?= $form->field($model, 'deleted_at')->textInput() ?>

<!-- attribute privacy -->
			<?= $form->field($model, 'privacy')->textInput() ?>

<!-- attribute attivo -->
			<?= $form->field($model, 'attivo')->textInput() ?>

<!-- attribute validato_almeno_una_volta -->
			<?= $form->field($model, 'validato_almeno_una_volta')->textInput() ?>

<!-- attribute avatar_id -->
			<?= $form->field($model, 'avatar_id')->textInput() ?>

<!-- attribute nascita_nazioni_id -->
			<?= $form->field($model, 'nascita_nazioni_id')->textInput() ?>

<!-- attribute nascita_province_id -->
			<?= $form->field($model, 'nascita_province_id')->textInput() ?>

<!-- attribute nascita_comuni_id -->
			<?= $form->field($model, 'nascita_comuni_id')->textInput() ?>

<!-- attribute user_profile_titoli_studio_id -->
			<?= $form->field($model, 'user_profile_titoli_studio_id')->textInput() ?>

<!-- attribute user_profile_stati_civili_id -->
			<?= $form->field($model, 'user_profile_stati_civili_id')->textInput() ?>

<!-- attribute nazionalita_residenza_id -->
			<?= $form->field($model, 'nazionalita_residenza_id')->textInput() ?>

<!-- attribute comune_residenza_id -->
			<?= $form->field($model, 'comune_residenza_id')->textInput() ?>

<!-- attribute provincia_residenza_id -->
			<?= $form->field($model, 'provincia_residenza_id')->textInput() ?>

<!-- attribute domicilio_provincia_id -->
			<?= $form->field($model, 'domicilio_provincia_id')->textInput() ?>

<!-- attribute domicilio_comune_id -->
			<?= $form->field($model, 'domicilio_comune_id')->textInput() ?>

<!-- attribute residenza_nazione_id -->
			<?= $form->field($model, 'residenza_nazione_id')->textInput() ?>

<!-- attribute facilitatore_id -->
			<?= $form->field($model, 'facilitatore_id')->textInput() ?>

<!-- attribute default_facilitatore -->
			<?= $form->field($model, 'default_facilitatore')->textInput() ?>

<!-- attribute user_profile_area_id -->
			<?= $form->field($model, 'user_profile_area_id')->textInput() ?>

<!-- attribute user_profile_role_id -->
			<?= $form->field($model, 'user_profile_role_id')->textInput() ?>

<!-- attribute user_profile_age_group_id -->
			<?= $form->field($model, 'user_profile_age_group_id')->textInput() ?>

<!-- attribute prevalent_partnership_id -->
			<?= $form->field($model, 'prevalent_partnership_id')->textInput() ?>

<!-- attribute user_id -->
			<?= $form->field($model, 'user_id')->textInput() ?>

<!-- attribute created_by -->
			<?= $form->field($model, 'created_by')->textInput() ?>

<!-- attribute updated_by -->
			<?= $form->field($model, 'updated_by')->textInput() ?>

<!-- attribute deleted_by -->
			<?= $form->field($model, 'deleted_by')->textInput() ?>

<!-- attribute presentazione_breve -->
			<?= $form->field($model, 'presentazione_breve')->textInput(['maxlength' => true]) ?>

<!-- attribute indirizzo_residenza -->
			<?= $form->field($model, 'indirizzo_residenza')->textInput(['maxlength' => true]) ?>

<!-- attribute numero_civico_residenza -->
			<?= $form->field($model, 'numero_civico_residenza')->textInput(['maxlength' => true]) ?>

<!-- attribute domicilio_indirizzo -->
			<?= $form->field($model, 'domicilio_indirizzo')->textInput(['maxlength' => true]) ?>

<!-- attribute domicilio_localita -->
			<?= $form->field($model, 'domicilio_localita')->textInput(['maxlength' => true]) ?>

<!-- attribute email_pec -->
			<?= $form->field($model, 'email_pec')->textInput(['maxlength' => true]) ?>

<!-- attribute telefono -->
			<?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

<!-- attribute cellulare -->
			<?= $form->field($model, 'cellulare')->textInput(['maxlength' => true]) ?>

<!-- attribute fax -->
			<?= $form->field($model, 'fax')->textInput(['maxlength' => true]) ?>

<!-- attribute status -->
			<?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

<!-- attribute facebook -->
			<?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>

<!-- attribute twitter -->
			<?= $form->field($model, 'twitter')->textInput(['maxlength' => true]) ?>

<!-- attribute linkedin -->
			<?= $form->field($model, 'linkedin')->textInput(['maxlength' => true]) ?>

<!-- attribute googleplus -->
			<?= $form->field($model, 'googleplus')->textInput(['maxlength' => true]) ?>

<!-- attribute user_profile_area_other -->
			<?= $form->field($model, 'user_profile_area_other')->textInput(['maxlength' => true]) ?>

<!-- attribute user_profile_role_other -->
			<?= $form->field($model, 'user_profile_role_other')->textInput(['maxlength' => true]) ?>

<!-- attribute codice_fiscale -->
			<?= $form->field($model, 'codice_fiscale')->textInput(['maxlength' => true]) ?>

<!-- attribute cap_residenza -->
			<?= $form->field($model, 'cap_residenza')->textInput(['maxlength' => true]) ?>

<!-- attribute domicilio_lat -->
			<?= $form->field($model, 'domicilio_lat')->textInput(['maxlength' => true]) ?>

<!-- attribute domicilio_lon -->
			<?= $form->field($model, 'domicilio_lon')->textInput(['maxlength' => true]) ?>

<!-- attribute domicilio_civico -->
			<?= $form->field($model, 'domicilio_civico')->textInput(['maxlength' => true]) ?>

<!-- attribute domicilio_cap -->
			<?= $form->field($model, 'domicilio_cap')->textInput(['maxlength' => true]) ?>

<!-- attribute partita_iva -->
			<?= $form->field($model, 'partita_iva')->textInput(['maxlength' => true]) ?>

<!-- attribute iban -->
			<?= $form->field($model, 'iban')->textInput(['maxlength' => true]) ?>
        </p>
        <?php $this->endBlock(); ?>
        
        <?=
    Tabs::widget(
                 [
                    'encodeLabels' => false,
                    'items' => [ 
                        [
    'label'   => Yii::t('models', 'UserProfile'),
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

