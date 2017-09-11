<?php

namespace frontend\modules\community\controllers;

use yii\web\Controller;
use Yii;

class DefaultController extends Controller
{
    public $layout = 'default';

    public function actionIndex()
    {
        if(!Yii::$app->user->isGuest)
            {$username=Yii::$app->user->identity->username;} 
        else {$username=null;}
        return $this->render('index',compact('username'));

/*        $request = \Yii::$app->request;
        if($request->isGet){
            //$name = $request->queryString;//
            $name = $request->get('name');//
        }
        return $this->render('index',compact('name'));*/
    }
}
