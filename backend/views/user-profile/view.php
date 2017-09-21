<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var common\models\UserProfile $model
*/
$copyParams = $model->attributes;

$this->title = Yii::t('models', 'User Profile');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'User Profiles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'View';
?>
<div class="giiant-crud user-profile-view">

    <!-- flash message -->
    <?php if (\Yii::$app->session->getFlash('deleteError') !== null) : ?>
        <span class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <?= \Yii::$app->session->getFlash('deleteError') ?>
        </span>
    <?php endif; ?>

    <h1>
        <?= Yii::t('models', 'User Profile') ?>
        <small>
            <?= $model->id ?>
        </small>
    </h1>


    <div class="clearfix crud-navigation">

        <!-- menu buttons -->
        <div class='pull-left'>
            <?= Html::a(
            '<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit',
            [ 'update', 'id' => $model->id],
            ['class' => 'btn btn-info']) ?>

            <?= Html::a(
            '<span class="glyphicon glyphicon-copy"></span> ' . 'Copy',
            ['create', 'id' => $model->id, 'UserProfile'=>$copyParams],
            ['class' => 'btn btn-success']) ?>

            <?= Html::a(
            '<span class="glyphicon glyphicon-plus"></span> ' . 'New',
            ['create'],
            ['class' => 'btn btn-success']) ?>
        </div>

        <div class="pull-right">
            <?= Html::a('<span class="glyphicon glyphicon-list"></span> '
            . 'Full list', ['index'], ['class'=>'btn btn-default']) ?>
        </div>

    </div>

    <hr />

    <?php $this->beginBlock('common\models\UserProfile'); ?>

    
    <?= DetailView::widget([
    'model' => $model,
    'attributes' => [
            'nome',
        'cognome',
        'sesso',
        'presentazione_personale:ntext',
        'widgets_selected:ntext',
        'nazionalita',
        'altri_dati_contatto:ntext',
        'note:ntext',
        'nascita_data',
        'ultimo_accesso',
        'ultimo_logout',
        'created_at',
        'updated_at',
        'deleted_at',
        'privacy',
        'attivo',
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
        'user_profile_role_id',
        'user_profile_age_group_id',
        'prevalent_partnership_id',
        'user_id',
        'created_by',
        'updated_by',
        'deleted_by',
        'presentazione_breve',
        'indirizzo_residenza',
        'numero_civico_residenza',
        'domicilio_indirizzo',
        'domicilio_localita',
        'email_pec:email',
        'telefono',
        'cellulare',
        'fax',
        'status',
        'facebook',
        'twitter',
        'linkedin',
        'googleplus',
        'user_profile_area_other',
        'user_profile_role_other',
        'codice_fiscale',
        'cap_residenza',
        'domicilio_lat',
        'domicilio_lon',
        'domicilio_civico',
        'domicilio_cap',
        'partita_iva',
        'iban',
    ],
    ]); ?>

    
    <hr/>

    <?= Html::a('<span class="glyphicon glyphicon-trash"></span> ' . 'Delete', ['delete', 'id' => $model->id],
    [
    'class' => 'btn btn-danger',
    'data-confirm' => '' . 'Are you sure to delete this item?' . '',
    'data-method' => 'post',
    ]); ?>
    <?php $this->endBlock(); ?>


    
    <?= Tabs::widget(
                 [
                     'id' => 'relation-tabs',
                     'encodeLabels' => false,
                     'items' => [
 [
    'label'   => '<b class=""># '.$model->id.'</b>',
    'content' => $this->blocks['common\models\UserProfile'],
    'active'  => true,
],
 ]
                 ]
    );
    ?>
</div>
