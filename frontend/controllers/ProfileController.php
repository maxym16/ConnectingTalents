<?php

namespace frontend\controllers;

use common\models\User;
use common\models\UserApiData;
use common\models\UserProfile;
use frontend\models\SignupExtraForm;
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
                //'only' => ['index'],
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

        if (!\Yii::$app->user->can('profile_view')) return $this->redirect(['/']);

        $username = Yii::$app->user->identity->username;
        $user_id = Yii::$app->user->id;


        $user = User::find()->where(['id' =>$user_id])->one();
        $profile = UserProfile::find()->where(['user_id' =>$user_id])->one();



        $model = SignupExtraForm::findOne(['user_id'=>\Yii::$app->user->id]);

        /** UTC data water earth air fire */

        
        $utcdata = UserApiData::findOne(['user_id' => $user_id]);
        if($utcdata){
            //print_r(Yii::$app->cache->get('utc'.$utcdata->utc_id)); die;
            $utcdata = json_decode(ApiController::getUTCData($utcdata->utc_id));

            
        }

        /** token for basic utc url */
        $token = ApiController::getStartUtcSurveyToken(2, 'EN', $user->internal_user_id, 'external_'.$user_id);
        $base_utc_url = 'http://services.connectingtalents.org/test_survey?token='.urlencode($token);

        /** Oportunities platform data  */
        $talents = PlatformDataController::getTalents();

        return $this->render('index',compact('username','user','profile', 'base_utc_url', 'utcdata', 'model', 'talents'));
    }
}

