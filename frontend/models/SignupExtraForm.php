<?php

namespace frontend\models;

use yii\base\Model;
use common\models\User;
use common\models\UserProfile;
use common\models\UserProfileRole;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;

/**
 * Signup form
 */
class SignupExtraForm extends ActiveRecord
{
/*    public $nome;
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
    public $presentazione_personale;*/
    public $email;
    public $password;
    public $file;
    public $del_img;
    
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
            [['sesso','image','expl', 'presentazione_personale', 'note'], 'string'],
            [['sharing', 'user_profile_role_id', 'user_profile_age_group_id'/*, 'user_id'*/], 'integer'],
            [['nome', 'cognome', 'presentazione_breve', 'telefono'/*, 'status'*/, 'facebook', 'linkedin', 'googleplus'], 'string', 'max' => 255],
            ['telefono', 'unique', 'message' => 'This phono has already been taken.'],
            [['purpos'],'string'],
            [['file'], 'file', 'extensions' => 'png, jpg'],
            [['del_img'], 'boolean'],
//            [['telefono'],'PhoneNumber'],
//            ['telefono', 'match', 'pattern' => '/^\+7\s\([0-9]{3}\)\s[0-9]{3}\-[0-9]{2}\-[0-9]{2}$/', 'message' => 'Wrong number' ],
            ['email', 'trim'],
            [['email','email_pec'], 'email'],
            ['email', 'string', 'max' => 255],
//            ['email', 'exist', 'targetClass' => '\common\models\User', 'message' => 'This email address is already registered, access the login page to sign in.'],

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
            'purpos' => 'Purposes',
            'expl' => 'Explaination',
            'sharing' => 'Sharing platform',
            'user_profile_age_group_id' => 'Age',
            'telefono' => 'Telephone',
            'image' => 'Photo',
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
