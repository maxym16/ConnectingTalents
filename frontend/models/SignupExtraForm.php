<?php



namespace frontend\models;



use Imagine\Image\Box;
use Yii;
use yii\base\Model;

use common\models\User;

use common\models\UserProfile;

use common\models\UserProfileRole;

use yii\db\ActiveRecord;

use yii\imagine\Image;
use yii\web\UploadedFile;



/**

 * Signup form

 */

class SignupExtraForm extends ActiveRecord

{
//    /** имя @var $nome */
//    public $nome;
//    /** фамилия @var $cognome */
//    public $cognome;
//    /** пол @var  $sesso */
//    public $sesso;
//    /** email @var  $email_pec */
//    public $email_pec;
//    /** телефон @var  $telefono */
//    public $telefono;
//    /** возрастная група @var  $user_profile_age_group_id */
//    public $user_profile_age_group_id;
//    /** g+ @var  $googleplus */
//    public $googleplus;
//    /** fb @var  $facebook */
//    public $facebook;
//    /** in @var  $linkedin */
//    public $linkedin;
//
    public $file;
//    /** фото @var  $image */
//    public $image;
//    /** описание @var  $presentazione_personale */
//    public $presentazione_personale;
//    /** удал работа @var  $presentazione_breve */
//    public $remote_work;
//    /** усилие @var  $effort */
//    public $effort;


    public static function tableName(){

        return 'user_profile';

    }


    /**
     * user group role array
     * @return array
     */
    public static function ageGroup(){
        return [
            '1'=>'18-25',
            '2'=>'26-35',
            '3'=>'36-45',
            '4'=>'46-55',
            '5'=>'56-65',
            '6'=>'>65'
        ];
    }

    /**

     * @inheritdoc

     */
    public function rules()

    {

        return [

            [['nome', 'cognome'], 'required'],

            [['sesso'], 'string'],

            [['user_profile_age_group_id'], 'integer'],

            [['nome', 'cognome', 'presentazione_breve', 'telefono'/*, 'status'*/, 'facebook', 'linkedin', 'googleplus'], 'string', 'max' => 255],

            ['telefono', 'unique', 'message' => 'This phono has already been taken.'],

            [['file'], 'file', 'extensions' => 'png, jpg'],

            ['email_pec', 'email'],

            ['email_pec', 'validateEmail'],


//            ['email', 'exist', 'targetClass' => '\common\models\User', 'message' => 'This email address is already registered, access the login page to sign in.'],


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


    public function validateEmail($attribute, $params){
        $res = User::find()
            ->where('id != :id and email = :email',['id'=>Yii::$app->user->id, 'email' => $this->$attribute])->one();
        if($res){
            $this->addError($attribute, 'Email already exist.');
        }
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

    public function sendEmail()
    {
        /* @var $user User */
        $user = User::findOne([
            'status' => User::STATUS_ACTIVE,
            'email' => $this->email_pec,
        ]);

        if (!$user) {
            return false;
        }

        return Yii::$app->mailer->compose(['text' => 'userExtraRegister-text'],['user' => $user])
            ->setFrom([Yii::$app->params['supportEmail']=>Yii::$app->params['adminEmail']])
            ->setTo($user->email)
            ->setSubject('From Connecting Talents ' . Yii::$app->params['myAplication'])
            ->send();
    }
}

