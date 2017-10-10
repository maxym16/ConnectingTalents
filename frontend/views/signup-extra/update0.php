<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\SignupExtraForm */

$this->title = 'Update personal data : ' . $model->nome;
//$this->params['breadcrumbs'][] = ['label' => 'Signup Extra Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nome, 'url' => ['/profile', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="signup-extra-form-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model, 'user' => $user,
    ]) ?>

</div>
