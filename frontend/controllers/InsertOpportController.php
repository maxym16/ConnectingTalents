<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Summary;
use frontend\models\Lifecycle;

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

    public function actionLifecycle()
    {
    $model = new Lifecycle();

    return $this->render('lifecycle', [
        'model' => $model,
    ]);
    }
    
}
