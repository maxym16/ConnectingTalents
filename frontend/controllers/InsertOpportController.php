<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Summary;
use frontend\models\Lifecycle;
use yii\filters\AccessControl;
use common\models\User;

class InsertOpportController extends Controller
{
    public function behaviors()
    {

        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'summary', 'lifecycle', 'after'],
                'rules' => [
                    /*[
                        'allow' => true,
                        'actions' => ['login', 'signup'],
                        'roles' => ['?'],
                    ],*/
                    [
                        'allow' => true,
                        'actions' => ['index', 'summary', 'lifecycle', 'after'],
                        'roles' => [User::ROLE_USER1],
                    ],
                ],
            ]
        ];
    }


    public function actionIndex()
    {
        if(!Yii::$app->user->isGuest)
            {$username=Yii::$app->user->identity->username;} 
        else {$username=null;}

        if (\Yii::$app->user->can('user_2'))
        {
            if($username){
            return $this->render('after',compact('username'));
            }
            return $this->render('index');
        }
        return $this->redirect('/signup-extra/create');
 
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
