<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Password-reset request form
 * @package frontend\models
 */

class PasswordResetRequestForm extends Model
{
    public $email;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'exist',
                'targetClass' => '\common\models\User',
                'filter' => ['status' => User::STATUS_ACTIVE],
                'message' => 'There is no user with such email.'
            ],
        ];

    }

    /**
     * Sends an email with a link, for resetting the password.
     *
     * @return boolean whether the email was send
     */
    public function validateRecaptcha(){
        if(!isset($_POST['g-recaptcha-response'])) return true;
        return (isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response'] != '')?
            true: false;
    }


    public function sendEmail()
    {
//        if(!$this->validateRecaptcha()){
//            return false;
//        }

        /* @var $user User */
        $user = User::findOne([
            'status' => User::STATUS_ACTIVE,
            'email' => $this->email,
        ]);

        if (!$user) {
            return false;
        }

        if (!User::isPasswordResetTokenValid($user->password_reset_token)) {
            $user->generatePasswordResetToken();
            if (!$user->save()) {
                return false;
            }
        }

        return Yii::$app->mailer->compose(['html' => 'passwordResetToken-html', 'text' => 'passwordResetToken-text'],['user' => $user])
            ->setFrom([Yii::$app->params['supportEmail']=>Yii::$app->params['adminEmail']])
            ->setTo($this->email)
            ->setSubject('Password reset for ' . Yii::$app->params['myAplication'])
            ->send();
    }

}

