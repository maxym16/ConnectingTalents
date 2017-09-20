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
    public $cognome;
    public $sesso;
    public $user_profile_age_group_id;
    public $telefono;
    public $facebook;
    public $googleplus;
    public $linkedin;
    public $avatar_id;
    public $note;
    public $user_profile_role_id;
    public $presentazione_breve;
    public $presentazione_personale;
    public $email;
    public $password;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            ['nome', 'trim'],
//            ['nome', 'required'],
//            ['nome', 'unique', 'targetClass' => '\common\models\UserProfile', 'message' => 'This username has already been taken.'],
//            ['nome', 'string', 'min' => 2, 'max' => 255],
//            ['cognome', 'trim'],
//            ['cognome', 'required'],
//            ['cognome', 'unique', 'targetClass' => '\common\models\UserProfile', 'message' => 'This username has already been taken.'],
//            ['cognome', 'string', 'min' => 2, 'max' => 255],

            [['nome', 'cognome'], 'required'],
            [['sesso', 'presentazione_personale', 'note'], 'string'],
            [['avatar_id', 'user_profile_role_id', 'user_profile_age_group_id'/*, 'user_id'*/], 'integer'],
            [['nome', 'cognome', 'presentazione_breve', 'telefono'/*, 'status'*/, 'facebook', 'linkedin', 'googleplus'], 'string', 'max' => 255],
            
            ['email', 'trim'],
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
        $userpr->cognome = $this->cognome;
        $userpr->sesso = $this->sesso;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $userpr->save() ? $userpr : null;
    }
}
