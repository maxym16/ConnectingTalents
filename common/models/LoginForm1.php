<?php

namespace common\models;

use Yii;
use yii\base\Model;


/**
 * Login form
 */
class LoginForm extends Model {
    public $username;
    public $password;
    public $email;

    /**
     * @var integer Number of seconds that the user can remain in logged-in status. Defaults to 0, meaning login till the user closes the browser or the session is manually destroyed.
     */
    public $rememberMe = true;

    /**
     * @var string User Role
     */
    public $ruolo; // TODO Translate

    private $_user;

    public $reCaptcha;

    /**
     * Define Properties rules
     * @inheritdoc
     */
    public function rules() {

        return [
            // username and password are both required
            [['password'], 'required'],
//            ['username', 'string', 'min' => 2, 'max' => 255],
            ['ruolo', 'required', 'when' => function($model) { // TODO Translate

                    return (isset(\Yii::$app->params['template-amos']) && \Yii::$app->params['template-amos']);

                }],
            ['rememberMe', 'boolean'],
            ['password', 'validatePassword'],
            ['ruolo', 'safe'], // TODO Translate
            ['email', 'trim'],

            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
//            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address is already registered, access the '.Html::a('login page to sign in',['site/login'], ['style'=>'font-weight:bold'])],
            [['reCaptcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator::className(), 'message' => 'Please confirm that you are not a bot.']

        ];

    }

    public function attributeLabels()
    {
        return [
//            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
        ];
    }

    public function validateRecaptcha(){
        if(!isset($_POST['g-recaptcha-response'])) return true;
        return (isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response'] != '')?
            true: false;
    }


    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params) {

        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, Yii::t('amosplatform', 'Incorrect email or password.'));
            }
        }
    }

    /**
     * Logs in a user using the provided email and password.
     *
     * @return boolean whether the user is logged in successfully
     */
    public function login() {

        if ($this->validate() /*&& $this->validateRecaptcha()*/) {
            $loginTimeout = Yii::$app->params['loginTimeout'];

            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? $loginTimeout : 0);
        } else {
            return false;
        }

    }


    /**
     * Finds user by [[email]]
     *
     * @return User|null
     */
    protected function getUser() {
        if ($this->_user === null) {
                $this->_user = User::findByEmail($this->email);
        }
        return $this->_user;
    }



}

