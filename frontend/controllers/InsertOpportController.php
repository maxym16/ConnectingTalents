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

/*    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            // form inputs are valid, do something here
            return;
        }
    }
*/
    return $this->render('summary', [
        'model' => $model,
    ]);
    }

}
