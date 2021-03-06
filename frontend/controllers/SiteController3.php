<?php

namespace frontend\controllers;

use common\models\LoginForm;
use common\models\User;
use common\models\UserProfile;
use common\models\UserSocial;
use frontend\models\ContactForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\SignupExtraForm;
use Yii;
use yii\base\InvalidParamException;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;

/**
 * Class SiteController
 * @package frontend\controllers
 */
class SiteController extends Controller
{

    public function behaviors()
    {
        return [
/*            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],*/
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
    
    /**
     * check access before each action
     * @param type $action
     * @return boolean
     * @throws ForbiddenHttpException
     */
/*    public function beforeAction($action)
    {
        if (parent::beforeAction($action)) {
            if (!\Yii::$app->user->can($action->id)) {
                throw new ForbiddenHttpException('Access denied');
            }
            return true;
        } else {
            return false;
        }
    }
*/
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     * @return string->
     */
    public function actionIndex()
    {
/*        
        $userId = Yii::$app->user->id; //id поточного користувача
        $userRole = Yii::$app->authManager->getRole('user_1');
        Yii::$app->authManager->assign($userRole, $userId);
*/      
        if(\Yii::$app->user->id){
          $user = User::findOne(\Yii::$app->user->id);
          debug($user->role);
        }
        debug(\Yii::$app->user->can('user_2'));
        debug(User::getRoleOfUser(Yii::$app->user->id));
        debug(Yii::$app->user->id);
//        debug($this->getUser()->id);
//        debug($this->getUser()->id);
        echo 'can user_1'; debug(\Yii::$app->user->can('user_1'));
        echo 'checkAccess role'; 
//        debug(Yii::$app->authManager->checkAccess(\Yii::$app->user->id,User::findOne(\Yii::$app->user->id)->role));
        debug(Yii::$app->authManager->checkAccess(\Yii::$app->user->id,'user_3'));
        echo 'can user_2'; debug(\Yii::$app->user->can('user_2'));
        echo 'can user_3'; debug(\Yii::$app->user->can('user_3'));
        echo 'can admin'; debug(\Yii::$app->user->can('admin'));
        echo 'can guest'; debug(\Yii::$app->user->can('guest'));
        echo 'role'; debug(User::findOne(\Yii::$app->user->id)->role);
        echo 'can index'; debug(\Yii::$app->user->can('index'));
        echo 'can contact'; debug(\Yii::$app->user->can('contact'));
        echo 'fan'; debug(\Yii::$app->user->can('fan'));
        echo 'contributor'; debug(\Yii::$app->user->can('contributor'));
        echo 'partner'; debug(\Yii::$app->user->can('partner'));
        echo 'sponsor'; debug(\Yii::$app->user->can('sponsor'));
        echo 'can team_create'; debug(\Yii::$app->user->can('team_create'));
//        echo 'checkAccess team_create'; debug(\Yii::$app->user->checkAccess('team_create'));
//        echo 'Roles usera'; debug(\Yii::$app->authManager->getRolesByUser(\Yii::$app->user->id));
//        User::findOne(\Yii::$app->user->id)->role
//        Yii::$app->authManager->checkAccess($this->getUser()->id)
//        Yii::$app->user->checkAccess('admin')
//        debug(Yii::$app->authManager->getRole('user_1'));
        
/*        if (!\Yii::$app->user->can('user_1')) { 
            throw new \yii\web\ForbiddenHttpException('Access denied.'); 
        }
*/        
        return $this->render('index');
    }

    /**
     * Logs in a user.
     * @return string|\yii\web\Response
     */
    public function actionLogin()
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

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
//            return $this->goBack();
            return $this->redirect(['/']);
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
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
        return $this->render('about');
    }

    /**
     * Signs user up.
     * @return string|\yii\web\Response
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
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
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
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
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
