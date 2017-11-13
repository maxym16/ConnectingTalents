<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Feedback';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feedback-feed-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Export Google Drive', ['feedback-feed/export'], ['class' => 'btn btn-info']) ?>
    </p>
    <p>
        <?= Html::a('Create Feedback', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'agree',
            'surprised',
            'recommend',
            'text:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
