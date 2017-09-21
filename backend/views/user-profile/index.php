<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/**
* @var yii\web\View $this
* @var yii\data\ActiveDataProvider $dataProvider
*/

$this->title = Yii::t('models', 'User Profiles');
$this->params['breadcrumbs'][] = $this->title;

if (isset($actionColumnTemplates)) {
$actionColumnTemplate = implode(' ', $actionColumnTemplates);
    $actionColumnTemplateString = $actionColumnTemplate;
} else {
Yii::$app->view->params['pageButtons'] = Html::a('<span class="glyphicon glyphicon-plus"></span> ' . 'New', ['create'], ['class' => 'btn btn-success']);
    $actionColumnTemplateString = "{view} {update} {delete}";
}
$actionColumnTemplateString = '<div class="action-buttons">'.$actionColumnTemplateString.'</div>';
?>
<div class="giiant-crud user-profile-index">

    <?php
//         ?>

    
    <?php \yii\widgets\Pjax::begin(['id'=>'pjax-main', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-main ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>

    <h1>
        <?= Yii::t('models', 'User Profiles') ?>
        <small>
            List
        </small>
    </h1>
    <div class="clearfix crud-navigation">
        <div class="pull-left">
            <?= Html::a('<span class="glyphicon glyphicon-plus"></span> ' . 'New', ['create'], ['class' => 'btn btn-success']) ?>
        </div>

        <div class="pull-right">

                        
            <?= 
            \yii\bootstrap\ButtonDropdown::widget(
            [
            'id' => 'giiant-relations',
            'encodeLabel' => false,
            'label' => '<span class="glyphicon glyphicon-paperclip"></span> ' . 'Relations',
            'dropdown' => [
            'options' => [
            'class' => 'dropdown-menu-right'
            ],
            'encodeLabels' => false,
            'items' => [

]
            ],
            'options' => [
            'class' => 'btn-default'
            ]
            ]
            );
            ?>
        </div>
    </div>

    <hr />

    <div class="table-responsive">
        <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'pager' => [
        'class' => yii\widgets\LinkPager::className(),
        'firstPageLabel' => 'First',
        'lastPageLabel' => 'Last',
        ],
                'tableOptions' => ['class' => 'table table-striped table-bordered table-hover'],
        'headerRowOptions' => ['class'=>'x'],
        'columns' => [
                [
            'class' => 'yii\grid\ActionColumn',
            'template' => $actionColumnTemplateString,
            'buttons' => [
                'view' => function ($url, $model, $key) {
                    $options = [
                        'title' => Yii::t('yii', 'View'),
                        'aria-label' => Yii::t('yii', 'View'),
                        'data-pjax' => '0',
                    ];
                    return Html::a('<span class="glyphicon glyphicon-file"></span>', $url, $options);
                }
            ],
            'urlCreator' => function($action, $model, $key, $index) {
                // using the column name as key, not mapping to 'id' like the standard generator
                $params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
                $params[0] = \Yii::$app->controller->id ? \Yii::$app->controller->id . '/' . $action : $action;
                return Url::toRoute($params);
            },
            'contentOptions' => ['nowrap'=>'nowrap']
        ],
			'nome',
			'cognome',
			'sesso',
			'presentazione_personale:ntext',
			'widgets_selected:ntext',
			'nazionalita',
			'altri_dati_contatto:ntext',
			/*'note:ntext',*/
			/*'nascita_data',*/
			/*'ultimo_accesso',*/
			/*'ultimo_logout',*/
			/*'created_at',*/
			/*'updated_at',*/
			/*'deleted_at',*/
			/*'privacy',*/
			/*'attivo',*/
			/*'validato_almeno_una_volta',*/
			/*'avatar_id',*/
			/*'nascita_nazioni_id',*/
			/*'nascita_province_id',*/
			/*'nascita_comuni_id',*/
			/*'user_profile_titoli_studio_id',*/
			/*'user_profile_stati_civili_id',*/
			/*'nazionalita_residenza_id',*/
			/*'comune_residenza_id',*/
			/*'provincia_residenza_id',*/
			/*'domicilio_provincia_id',*/
			/*'domicilio_comune_id',*/
			/*'residenza_nazione_id',*/
			/*'facilitatore_id',*/
			/*'default_facilitatore',*/
			/*'user_profile_area_id',*/
			/*'user_profile_role_id',*/
			/*'user_profile_age_group_id',*/
			/*'prevalent_partnership_id',*/
			/*'user_id',*/
			/*'created_by',*/
			/*'updated_by',*/
			/*'deleted_by',*/
			/*'presentazione_breve',*/
			/*'indirizzo_residenza',*/
			/*'numero_civico_residenza',*/
			/*'domicilio_indirizzo',*/
			/*'domicilio_localita',*/
			/*'email_pec:email',*/
			/*'telefono',*/
			/*'cellulare',*/
			/*'fax',*/
			/*'status',*/
			/*'facebook',*/
			/*'twitter',*/
			/*'linkedin',*/
			/*'googleplus',*/
			/*'user_profile_area_other',*/
			/*'user_profile_role_other',*/
			/*'codice_fiscale',*/
			/*'cap_residenza',*/
			/*'domicilio_lat',*/
			/*'domicilio_lon',*/
			/*'domicilio_civico',*/
			/*'domicilio_cap',*/
			/*'partita_iva',*/
			/*'iban',*/
        ],
        ]); ?>
    </div>

</div>


<?php \yii\widgets\Pjax::end() ?>


