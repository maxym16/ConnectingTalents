<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'slug:ntext',
            'titolo',
            'sottotitolo',
            'descrizione_breve',
            // 'descrizione:ntext',
            // 'metakey:ntext',
            // 'metadesc:ntext',
            // 'primo_piano',
            // 'immagine',
            // 'hits',
            // 'abilita_pubblicazione',
            // 'in_evidenza',
            // 'data_pubblicazione',
            // 'data_rimozione',
            // 'news_categorie_id',
            // 'status',
            // 'comments_enabled',
            // 'created_at',
            // 'updated_at',
            // 'deleted_at',
            // 'created_by',
            // 'updated_by',
            // 'deleted_by',
            // 'version',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
