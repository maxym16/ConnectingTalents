<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Feedback Ideas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feedback-idea-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Export Google Drive', ['feedback-idea/export'], ['class' => 'btn btn-info']) ?>
    </p>
    <p>
        <?= Html::a('View Coogle Drive', 'https://docs.google.com/spreadsheets/d/18bcbfgHzeqRL7JdgjA-dRIpZUyyTECmWzTOjE3wXYPY/edit#gid=0', ['class' => 'btn btn-danger']) ?>
    </p>
    <?php 
    //debug($model);
    //debug($xw);
    //debug($xmlstr);
    ?>
    <p></p>
    
    <p><?php
        foreach ($model as $mod) {
            echo ' title='.$mod['title'];
            echo ' id='.$mod->id;
        }
    ?></p>
</div>
