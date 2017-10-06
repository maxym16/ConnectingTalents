<?php

namespace frontend\controllers;

use yii\web\Controller;
use Yii;

/**
 * Description of MyOpportController
 */
class MyOpportController extends Controller 
{
    public function actionIndex()
    {
        $this->layout = 'ct-main-layout';

        if(Yii::$app->user->identity->username)
            {$username=Yii::$app->user->identity->username;} 
        else {$username=null;}
        return $this->render('index',compact('username')); 
//        return $this->render('index');
    }
}
