<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FeedbackFeed */

$this->title = 'Create Feedback';
$this->params['breadcrumbs'][] = ['label' => 'Feedback', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feedback-feed-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
