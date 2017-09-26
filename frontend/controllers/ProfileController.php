<?php

namespace frontend\controllers;

//use common\models\LoginForm;
use common\models\User;
use common\models\UserProfile;
//use frontend\models\ContactForm;
//use frontend\models\PasswordResetRequestForm;
//use frontend\models\ResetPasswordForm;
//use frontend\models\SignupForm;
use Yii;
//use yii\base\InvalidParamException;
//use yii\filters\AccessControl;
//use yii\filters\VerbFilter;
//use yii\web\BadRequestHttpException;
use yii\web\Controller;

/**
 * Description of ProfileController
 */
class ProfileController extends Controller 
{
    public $layout = 'profile';

    public function actionIndex()
    {
        if(!Yii::$app->user->isGuest)
        {
        $username=Yii::$app->user->identity->username;
        $user_id=Yii::$app->user->id;
        } 
        else {$username=null;}
        $profile = UserProfile::find()->where(['user_id' =>$user_id])->one();
//        debug($profile);
//        debug($profile->nome);
        return $this->render('index',compact('username','profile'));
    }

}
