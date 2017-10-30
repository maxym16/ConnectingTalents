<?php



namespace frontend\controllers;



use common\models\LoginForm;

use common\models\User;
use common\models\UserApiData;
use frontend\models\ContactForm;

use frontend\models\PasswordResetRequestForm;

use frontend\models\ResetPasswordForm;

use frontend\models\SignupForm;

use Yii;

use yii\base\InvalidParamException;

use yii\filters\AccessControl;

use yii\filters\VerbFilter;

use yii\web\BadRequestHttpException;

use yii\web\Controller;



/**

 * Description of TalentController

 */

class TalentController extends Controller 

{

    public $layout = 'talent';

    

    public function behaviors()

    {

        return [

            'access' => [

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

            ],

            'verbs' => [

                'class' => VerbFilter::className(),

                'actions' => [

                    'logout' => ['post'],

                ],

            ],

        ];

    }

    

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

    

    public function actionIndex()

    {
        $this->layout = 'ct-main-layout';

        if(Yii::$app->user->isGuest){
            $button_top_data = [
              'link' => ['/site/signup'],
              'title' => 'register'
            ];
        }else{
            $user_id = Yii::$app->user->id;
            $user = User::find()->where(['id' =>$user_id])->one();
            if($user->myprofile){
                $token = ApiController::getStartUtcSurveyToken(2, 'EN', $user->internal_user_id, 'external_'.$user_id);
                $base_utc_url = 'http://services.connectingtalents.org/utc_survey?token='.urlencode($token);
                $button_top_data = [
                    'link' => $base_utc_url,
                    'title' => 'UTC test'
                ];
            }
            else{
                $button_top_data = [
                    'link' => ['/signup-extra/create'],
                    'title' => 'register'
                ];
            }
        }




        return $this->render('index', compact('button_top_data'));

    }

    

    public function actionLogin()

    {

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



    public function actionLogout()

    {

        Yii::$app->user->logout();



        return $this->goHome();

    }



    public function actionSignup()

    {

        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post())) {

            if ($user = $model->signup()) {

                if (Yii::$app->getUser()->login($user)) {

//                    return $this->goHome();

                    return $this->redirect(['/registration']);

                }

            }

        }



        return $this->render('signup', [

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

