<?php

namespace frontend\controllers;

//use common\models\LoginForm;
//use common\models\User;
//use frontend\models\ContactForm;
//use frontend\models\PasswordResetRequestForm;
//use frontend\models\ResetPasswordForm;
//use frontend\models\SignupForm;
//use Yii;
//use yii\base\InvalidParamException;
//use yii\filters\AccessControl;
//use yii\filters\VerbFilter;
//use yii\web\BadRequestHttpException;
use yii\web\Controller;

/**
 * Description of ProfileController
 */
class RegistrationController extends Controller 
{

    public $layout = 'registration';
    
    public function actionIndex()
    {
        return $this->render('index');
    }

}
