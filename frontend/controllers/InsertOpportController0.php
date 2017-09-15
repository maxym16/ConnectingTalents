<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Summary;
use frontend\models\Lifecycle;

class InsertOpportController extends Controller
{
    public function actionIndex()
    {
        if(!Yii::$app->user->isGuest)
            {$username=Yii::$app->user->identity->username;} 
        else {$username=null;}
        
        if($username){
        return $this->render('after',compact('username'));
        }
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
    
    public function actionAfter()
    {
        return $this->render('after');
    }

}
