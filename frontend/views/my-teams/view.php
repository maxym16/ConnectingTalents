<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model frontend\models\Team */
Url::remember();
$this->title = $model->name;
$this->params['breadcrumbs'][]= ['label' => 'I have an opportunity', 'url' => '/opport'];
$this->params['breadcrumbs'][]= ['label' => 'Insert opportunity', 'url' => '/insert-opport'];
$this->params['breadcrumbs'][]= ['label' => 'My opportunities', 'url' => '/my-opport'];
$this->params['breadcrumbs'][]= ['label' => 'My teams', 'url' => '/my-teams'];
//$this->params['breadcrumbs'][] = ['label' => 'My team', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update Team', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete Team', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Manage team incoming requests', ['team-requests'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Add/remove members', ['team-members'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Buy Team services', ['team-services'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Team Coding', ['team-coding'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Team joined', ['team-joined'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'owner',
            'owner_opport',
            'description:ntext',
            'date',
            'type',
            'joined_team_id',
            'team_role_id',
            'parent_id',
            'visible',
            'status',
        ],
    ]) ?>

</div>
