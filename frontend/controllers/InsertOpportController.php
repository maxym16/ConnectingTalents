<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Summary;

class InsertOpportController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSummary()
    {
    $model = new Summary();

    return $this->render('summary', [
        'model' => $model,
    ]);
    }

}
