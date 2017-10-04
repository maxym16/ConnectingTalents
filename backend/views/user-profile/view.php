<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\UserProfile */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-profile-view color-admin">
    <br>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nome',
            'cognome',
            'codice_fiscale',
            'sesso',
            'image',
            'purpos',
            'expl:ntext',
            'sharing',
            'presentazione_breve',
            'presentazione_personale:ntext',
            'nascita_data',
            'privacy',
            'indirizzo_residenza',
            'cap_residenza',
            'numero_civico_residenza',
            'domicilio_indirizzo',
            'domicilio_civico',
            'domicilio_cap',
            'domicilio_localita',
            'domicilio_lat',
            'domicilio_lon',
            'widgets_selected:ntext',
            'nazionalita',
            'email_pec:email',
            'altri_dati_contatto:ntext',
            'telefono',
            'cellulare',
            'fax',
            'attivo',
            'status',
            'note:ntext',
            'partita_iva',
            'iban',
            'facebook',
            'twitter',
            'linkedin',
            'googleplus',
            'ultimo_accesso',
            'ultimo_logout',
            'validato_almeno_una_volta',
            'avatar_id',
            'nascita_nazioni_id',
            'nascita_province_id',
            'nascita_comuni_id',
            'user_profile_titoli_studio_id',
            'user_profile_stati_civili_id',
            'nazionalita_residenza_id',
            'comune_residenza_id',
            'provincia_residenza_id',
            'domicilio_provincia_id',
            'domicilio_comune_id',
            'residenza_nazione_id',
            'facilitatore_id',
            'default_facilitatore',
            'user_profile_area_id',
            'user_profile_area_other',
            'user_profile_role_id',
            'user_profile_role_other',
            'user_profile_age_group_id',
            'prevalent_partnership_id',
            'user_id',
            'created_at',
            'updated_at',
            'deleted_at',
            'created_by',
            'updated_by',
            'deleted_by',
        ],
    ]) ?>

</div>
