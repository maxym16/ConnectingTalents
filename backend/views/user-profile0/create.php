<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\UserProfile $model
*/

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'User Profiles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud user-profile-create">

    <h1>
        <?= Yii::t('models', 'User Profile') ?>
        <small>
                        <?= $model->id ?>
        </small>
    </h1>

    <div class="clearfix crud-navigation">
        <div class="pull-left">
            <?=             Html::a(
            'Cancel',
            \yii\helpers\Url::previous(),
            ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <hr />

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
