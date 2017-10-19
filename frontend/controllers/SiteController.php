<?php

namespace frontend\controllers;

use common\models\LoginForm;
use common\models\User;
use common\models\UserProfile;
use common\models\UserSocial;
use frontend\models\ContactForm;
use frontend\models\FeedbackForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\SignupExtraForm;
use Yii;
use yii\base\InvalidParamException;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\Url;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\UrlManager;

/**
 * Class SiteController
 * @package frontend\controllers
 */
class SiteController extends Controller
{

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
            'eauth' => [
                // required to disable csrf validation on OpenID requests
                'class' => \nodge\eauth\openid\ControllerBehavior::className(),
                'only' => ['login'],
            ],
        ];
    }
    
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     * @return string->
     */
    public function actionIndex()
    {
        $this->layout = 'ct-main-layout';
/*   //
        if(!isset($_COOKIE['introduce'])){
            $time = time()+72*3600;
            $parse = parse_url(Url::to(['/']));
            setcookie("introduce", '1', $time, '/', $parse['host']);
        }
*/  //
        return $this->render('index');
    }

    /**
     * Logs in a user.
     * @return string|\yii\web\Response
     */
    public function actionLogin()
    {
        $this->layout = 'ct-main-layout';

        $serviceName = Yii::$app->getRequest()->getQueryParam('service');
        if (isset($serviceName)) {
            /** @var $eauth \nodge\eauth\ServiceBase */
            $eauth = Yii::$app->get('eauth')->getIdentity($serviceName);
            $eauth->setRedirectUrl(Yii::$app->getUser()->getReturnUrl());
            $eauth->setCancelUrl(Yii::$app->getUrlManager()->createAbsoluteUrl('site/login'));

            try {
                if ($eauth->authenticate()) {

                    $user = UserSocial::initAutorization($eauth->getServiceTitle(), $eauth->getAttributes());

                    if ($user) {
                        Yii::$app->getUser()->login($user);
                        /** TODO убрать на релизе после того как уберуться тестовые пользователи */
                        $this->addInternalIdToRegisterUser($user);
                        // special redirect with closing popup window
                        return $eauth->redirect(['/', 'alert' => 'login']);
                    }
                }
                else {
                    // close popup window and redirect to cancelUrl
                    $eauth->cancel();
                }
            }
            catch (\nodge\eauth\ErrorException $e) {
                // save error to show it later
                Yii::$app->getSession()->setFlash('error', 'EAuthException: '.$e->getMessage());

                // close popup window and redirect to cancelUrl
//				$eauth->cancel();
                $eauth->redirect($eauth->getCancelUrl());
            }
        }

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            /** TODO убрать на релизе после того как уберуться тестовые пользователи */
            $this->addInternalIdToRegisterUser(User::findOne([Yii::$app->user->id]));
            return $this->redirect(['/', 'alert' => 'login']);
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Временная функция для добавления internal_id пользователю
     * @var User $user
     */
    public function addInternalIdToRegisterUser($user){
        if($user->internal_user_id === ''){
            $user->internal_user_id = md5($user->id.$user->password_hash.$user->auth_key.SignupForm::INTERNAL_ID_SOLT);
            $user->save();
        }
    }

    public function actionExtraLogin()
    {
        $serviceName = Yii::$app->getRequest()->getQueryParam('service');
        if (isset($serviceName)) {
            /** @var $eauth \nodge\eauth\ServiceBase */
            $eauth = Yii::$app->get('eauth')->getIdentity($serviceName);
            $eauth->setRedirectUrl(Yii::$app->getUser()->getReturnUrl());
            $eauth->setCancelUrl(Yii::$app->getUrlManager()->createAbsoluteUrl('site/login'));

            try {
                if ($eauth->authenticate()) {
                    $user = UserSocial::initAutorization($eauth->getServiceTitle(), $eauth->getAttributes());
                    if ($user) {
                        Yii::$app->getUser()->login($user);
                        // special redirect with closing popup window
                        $eauth->redirect(['/']);
                    }
                }
                else {
                    // close popup window and redirect to cancelUrl
                    $eauth->cancel();
                }
            }
            catch (\nodge\eauth\ErrorException $e) {
                // save error to show it later
                Yii::$app->getSession()->setFlash('error', 'EAuthException: '.$e->getMessage());
                // close popup window and redirect to cancelUrl
//				$eauth->cancel();
                $eauth->redirect($eauth->getCancelUrl());
            }
        }

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new \common\models\LoginExtraForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
//            return $this->goBack();
            return $this->redirect(['/']);
        } else {
            return $this->render('extra-login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     * @return \yii\web\Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     * @return string|\yii\web\Response
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     * @return string
     */
    public function actionAbout()
    {
        $this->layout = 'ct-main-layout';
        return $this->render('about');
    }

    /**
     * Signs user up.
     * @return string|\yii\web\Response
     */
    public function actionSignup()
    {
        $this->layout = 'ct-main-layout';

        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
            Yii::$app->mailer->compose()
                ->setTo($model->email)
                ->setFrom(['forever7@foreveridentity.com' => Yii::$app->params['adminEmail']])
                ->setSubject('From Connecting Talents')
                ->setTextBody('Dear'.$model->username .',
                Welcome to the Connecting Talents community.
                
                Your login data are:
                Username: '.$model->username.' ;
                Password: the password you choose at the sign up process
                If you forgot your password you can retrieve it from here: 
                http://open.connectingtalents.org/site/request-password-reset

                What is next?
                We invite you to provide more details about yourself, 
                accessing your Profile page 
                http://open.connectingtalents.org/signup-extra/create
                
                You can start discovering your talents 
                with our Unique Talent Coding Tests, 
                and see the Opportunities our community is cultivating.

                    Thank you again for your registration. 
                If you have any questions, 
                please let us know using the feedback page !
                
                Kerry
                Connecting Talents
                Twitter: @ConnecTalents
                Facebook: https://www.facebook.com/Connecting-Talents-299139017111407/
                Email: kerry@connectingtalents.org
                ')
                ->send();
                
                if (Yii::$app->getUser()->login($user)) {
                    return $this->redirect(['/', 'alert' => 'register']);
                }
            }
        }
        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionSignupExtra()
    {
        $model = new SignupExtraForm();
        if ($model->load(Yii::$app->request->post())) {
//            debug(Yii::$app->request->post()); die;
            if($model->validate()){
                $user2 = UserProfile::findByUsername($model->nome);
                if ($user2) {
                    $model->update();
                } else {               
                $model->save();
                }
                return $this->goHome();
                //return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Error.');
                return $this->refresh();
            }
            
        }
        return $this->render('signup-extra', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     * @return string|\yii\web\Response
     */
    public function actionRequestPasswordReset()
    {
//        Yii::$app->session->setFlash('success', 'Please check you email and reset the password.');
        $this->layout = 'ct-main-layout';
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                return $this->redirect(['/site/login', 'alert' => 'reset_password']);
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model, 
        ]);
    }

    /**
     * Resets password.
     * @param $token
     * @return string|\yii\web\Response
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        $this->layout = 'ct-main-layout';
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            return $this->redirect(['/site/login', 'alert' => 'change_password']);
        }
        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Agreement policy page
     * @return string
     */
    public function actionAgreement(){
        $this->layout = 'ct-main-layout';
        return $this->render('agreement');
    }

    /**
     * Cookie policy page
     * @return string
     */
    public function actionCookie(){
        $this->layout = 'ct-main-layout';
        return $this->render('cookie');
    }

    /**
     * Privacy policy page
     * @return string
     */
    public function actionPrivacy(){
        $this->layout = 'ct-main-layout';
        return $this->render('privacy');
    }
    /**
     * Feedback policy page
     * @return string
     */
    public function actionFeedback(){
        $this->layout = 'ct-main-layout';

        $model = new FeedbackForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                $model->clear();
                Yii::$app->session->setFlash('feedback_ok', 'Mail sending is success.');
            } else {
                Yii::$app->session->setFlash('feedback_error', 'Sorry, mail sending is failed.');
            }
        }

        return $this->render('feedback', compact('model'));
    }
}
