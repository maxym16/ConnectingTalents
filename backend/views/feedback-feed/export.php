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
        <?= Html::a('View Coogle Drive', 'http://docs.google.com/spreadsheets/d/18bcbfgHzeqRL7JdgjA-dRIpZUyyTECmWzTOjE3wXYPY/edit#gid=0', ['class' => 'btn btn-danger']) ?>
    </p>
<!--    <a href="http://docs.google.com/spreadsheets/d/18bcbfgHzeqRL7JdgjA-dRIpZUyyTECmWzTOjE3wXYPY/edit#gid=0">View Coogle Drive</a>-->
    <?php 
    //debug($model);
    //debug($xw);
    //debug($xmlstr);
    ?>
    <p></p>
    
    <p><?php
        foreach ($model as $mod) {
            echo ' title='.$mod['text'];
            echo ' id='.$mod->id;
        }
    ?></p>
</div>
