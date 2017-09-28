<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model frontend\models\Team */

$this->title = 'Create Team';
$this->params['breadcrumbs'][]= ['label' => 'I have an opportunity', 'url' => '/opport'];
$this->params['breadcrumbs'][]= ['label' => 'Insert opportunity', 'url' => '/insert-opport'];
$this->params['breadcrumbs'][]= ['label' => 'My opportunities', 'url' => '/my-opport'];
$this->params['breadcrumbs'][]= ['label' => 'My teams', 'url' => '/my-teams'];
//$this->params['breadcrumbs'][] = ['label' => 'My team', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <p class="btn btn-warning"><a href="<?= Url::to(['/my-teams/invite-internal']) ?>">Invite internal member</a></p>
    <p class="btn btn-warning"><a href="<?= Url::to(['#']) ?>">Invite external member</a></p>
    <p class="btn btn-warning"><a href="<?= Url::to(['#']) ?>">Talent scouting</a></p>
    <br><br>
    <?= $this->render('_form', [
        'model' => $model, 'user_id' => $user_id,
    ]) ?>
    
</div>
