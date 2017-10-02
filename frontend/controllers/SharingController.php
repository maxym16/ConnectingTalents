<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use common\models\User;

class SharingController extends Controller
{
    public function behaviors()
    {

        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index'],
                'rules' => [
                    /*[
                        'allow' => true,
                        'actions' => ['login', 'signup'],
                        'roles' => ['?'],
                    ],*/
                    [
                        'allow' => true,
                        'actions' => ['index'],
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
            return $this->render('index',compact('username'));
            }
            return $this->render('index');
        }
        return $this->redirect('/signup-extra/create');
 
    }

}
