<?php

namespace frontend\models;

use yii\base\Model;
use common\models\User;
use common\models\UserProfile;
use common\models\UserProfileRole;

/**
 * Signup form
 */
class SignupExtraForm extends Model
{
    public $nome;
    public $email;
    public $password;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['nome', 'trim'],
            ['nome', 'required'],
            ['nome', 'unique', 'targetClass' => '\common\models\UserProfile', 'message' => 'This username has already been taken.'],
            ['nome', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $userpr = new UserProfile();
        $userpr->nome = $this->nome;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $userpr->save() ? $userpr : null;
    }
}
