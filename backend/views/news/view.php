<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\News */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-view">

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
            'slug:ntext',
            'titolo',
            'sottotitolo',
            'descrizione_breve',
            'descrizione:ntext',
            'metakey:ntext',
            'metadesc:ntext',
            'primo_piano',
            'immagine',
            'hits',
            'abilita_pubblicazione',
            'in_evidenza',
            'data_pubblicazione',
            'data_rimozione',
            'news_categorie_id',
            'status',
            'comments_enabled',
            'created_at',
            'updated_at',
            'deleted_at',
            'created_by',
            'updated_by',
            'deleted_by',
            'version',
        ],
    ]) ?>

</div>
