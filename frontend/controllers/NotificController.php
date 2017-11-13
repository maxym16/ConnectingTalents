<?php

namespace frontend\controllers;

use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\FeedbackIdea;
use common\models\FeedbackFeed;
use common\models\User;

class NotificController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
    
    public function actionIndex()
    {
        //$idea = new FeedbackIdea();
        //$feed = new FeedbackFeed();
        
        $idea = FeedbackIdea::find()->where('rev="0"')->orderBy(['date' => SORT_DESC])->all();
        $feed = FeedbackFeed::find()->where('rev="0"')->orderBy(['date' => SORT_DESC])->all();
        $cidea = FeedbackIdea::find()->asArray()->where('rev="0"')->count();
        $cfeed = FeedbackFeed::find()->asArray()->where('rev="0"')->count();
                
        $this->layout = 'ct-main-layout';
        return $this->render('index',  compact('idea','feed','cidea','cfeed'));
    }

}
