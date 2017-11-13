<?php

namespace frontend\controllers;

use common\models\User;
use common\models\UserApiData;
use common\models\UserProfile;
use frontend\models\SignupExtraForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\FeedbackFeed;


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
                        'actions' => ['index', 'report', 'feedback'],
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
        $base_utc_url = 'http://services.connectingtalents.org/utc_survey?token='.urlencode($token);
        $pass_skill_url = 'http://services.connectingtalents.org/passionsandskills?token='.urlencode($token);

        /** Oportunities platform data  */
        $talents = PlatformDataController::getTalents();

        $talent_coding_level = 2;

        if($user->role == 'user_2' && $utcdata) $talent_coding_level = 3;

        return $this->render('index',
            compact(
                'username',
                'user',
                'profile',
                'base_utc_url',
                'pass_skill_url',
                'utcdata',
                'model',
                'talents',
                'talent_coding_level'
            )
        );
    }

    public function actionReport(){
        if (!\Yii::$app->user->can('profile_view')) return $this->redirect(['/']);
        $user_id = Yii::$app->user->id;
        $utcdata = UserApiData::findOne(['user_id' => $user_id]);
        if($utcdata){
            $utcdata = json_decode(ApiController::getUTCData($utcdata->utc_id));
        }
        
        return $this->render('report',compact('utcdata'));
    }
    
    public function actionFeedback()
    {
        $this->layout = 'ct-main-layout';
        
        $model = new \common\models\FeedbackFeed();
        if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            
            $a=Yii::$app->request->post();
            if(array_key_exists('rating-input-1-1',$a)){
            $model->agree='1';    
            }
            if(array_key_exists('rating-input-1-2',$a)){
            $model->agree='2';    
            }
            if(array_key_exists('rating-input-1-3',$a)){
            $model->agree='3';    
            }
            if(array_key_exists('rating-input-1-4',$a)){
            $model->agree='4';    
            }
            if(array_key_exists('rating-input-1-5',$a)){
            $model->agree='5';    
            }
            if(array_key_exists('rating-input-2-1',$a)){
            $model->surprised='1';    
            }
            if(array_key_exists('rating-input-2-2',$a)){
            $model->surprised='2';    
            }
            if(array_key_exists('rating-input-2-3',$a)){
            $model->surprised='3';    
            }
            if(array_key_exists('rating-input-2-4',$a)){
            $model->surprised='4';    
            }
            if(array_key_exists('rating-input-2-5',$a)){
            $model->surprised='5';    
            }
            if(array_key_exists('rating-input-3-1',$a)){
            $model->recommend='1';    
            }
            if(array_key_exists('rating-input-3-2',$a)){
            $model->recommend='2';    
            }
            if(array_key_exists('rating-input-3-3',$a)){
            $model->recommend='3';    
            }
            if(array_key_exists('rating-input-3-4',$a)){
            $model->recommend='4';    
            }
            if(array_key_exists('rating-input-3-5',$a)){
            $model->recommend='5';    
            }
            $model->save();
            $model->clear();
        
            Yii::$app->session->setFlash('feedback_ok', 'Thank you for your feedback.');
        } else {
            Yii::$app->session->setFlash('feedback_error', 'Sorry, feedback is failed.');
        }
        }
        return $this->render('feedback', compact('model'));
        
    }
    
}

