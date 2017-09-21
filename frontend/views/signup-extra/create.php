<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\SignupExtraForm */

$this->title = 'Create Signup Extra Form';
$this->params['breadcrumbs'][] = ['label' => 'Signup Extra Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="signup-extra-form-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
