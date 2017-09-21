<?php

namespace common\models;

use yii\base\Model;
use common\models\User;
use common\models\UserProfile;
use common\models\UserProfileRole;
use yii\db\ActiveRecord;

/**
 * Signup form
 */
class SignupExtraForm extends ActiveRecord
{
    public $email;
    public $password;

    public static function tableName(){
        return 'user_profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'cognome'], 'required'],
            [['sesso', 'presentazione_personale', 'note'], 'string'],
            [['avatar_id', 'user_profile_role_id', 'user_profile_age_group_id'/*, 'user_id'*/], 'integer'],
            [['nome', 'cognome', 'presentazione_breve', 'telefono'/*, 'status'*/, 'facebook', 'linkedin', 'googleplus'], 'string', 'max' => 255],
            ['telefono', 'unique', 'message' => 'This phono has already been taken.'],
            
            ['email', 'trim'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'exist', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

//            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

        public function attributeLabels(){
        return [
            'nome' => 'Name',
            'email' => 'E-mail',
            'cognome' => 'Surname',
            'sesso' => 'Sex',
            'user_profile_age_group_id' => 'Age',
            'telefono' => 'Phone',
            'avatar_id' => 'Photo',
            'note' => 'About me',
            'user_profile_role_id' => 'Role',
            'presentazione_breve' => 'Remote work',
            'presentazione_personale' => 'Effort',
        ];
    }

    
    public function myName($attr){
        $user = new User();
        if(!in_array($this->$attr, [$user->username])){
            $this->addError($attr, 'You can not change the name !');
        }
    }

    /**
     * Signs user up.
     * @return User|null the saved model or null if saving fails
     */
    public function signupExt()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user1 = new User();
        $user2 = new UserProfile();
        $user2->nome = $this->nome;
        $user2->cognome = $this->cognome;
        $user2->sesso = $this->sesso;
        $user1->email = $this->email;
        $user1->setPassword($this->password);
        $user1->generateAuthKey();
        
        return $user2->save() ? $user2 : null;
    }
}
