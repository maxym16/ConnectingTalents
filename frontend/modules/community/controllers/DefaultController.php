<?php

namespace frontend\modules\community\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public $layout = 'default';

    public function actionIndex()
    {
        $request = \Yii::$app->request;
        if($request->isGet){
            //$name = $request->queryString;//
            $name = $request->get('name');//
        }
        return $this->render('index',compact('name'));
    }
}
