<?php

namespace frontend\controllers;

use common\models\User;
use common\models\UserApiData;
use common\models\UserProfile;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;



/**
 * Description of ProfileController
 */
class ProfileController extends Controller 
{
    public $layout = 'ct-main-layout';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index'],
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
        if(!Yii::$app->user->isGuest)
        {
            $username=Yii::$app->user->identity->username;
            $user_id=Yii::$app->user->id;
        }
        else {$username=null;}

        $user = User::find()->where(['id' =>$user_id])->one();
        $profile = UserProfile::find()->where(['user_id' =>$user_id])->one();
        $token = ApiController::getStartUtcSurveyToken(2, 'EN', $user->internal_user_id, 'external_'.$user_id);

        $utcdata = UserApiData::findOne(['user_id' => $user_id]);
        if($utcdata){
            $utcdata = json_decode(ApiController::getUTCData($utcdata->utc_id));
        }

        return $this->render('index',compact('username','user','profile', 'token', 'utcdata'));
    }
}

