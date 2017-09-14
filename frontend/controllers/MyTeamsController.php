<?php

namespace frontend\controllers;

use yii\web\Controller;
use Yii;

/**
 * Description of MyTeamsController
 */
class MyTeamsController extends Controller 
{
    public function actionIndex()
    {
        if(Yii::$app->user->identity->username)
            {$username=Yii::$app->user->identity->username;} 
        else {$username=null;}
        return $this->render('index',compact('username')); 
    }
}

