<?php



/**

 * Lombardia Informatica S.p.A.

 * OPEN 2.0

 *

 * @see http://example.com Developers'community

 * @license GPLv3

 * @license https://opensource.org/licenses/gpl-3.0.html GNU General Public License version 3

 *

 * @package    lispa\amos\basic\template

 * @category   CategoryName

 * @author     Lombardia Informatica S.p.A.

 */



namespace frontend\models;



use Yii;
use yii\base\Model;

use common\models\User;
use yii\helpers\Html;


/**

 * Signup form

 */

class SignupForm extends Model

{

    public $username;

    public $surname;

    public $email;

    public $password;

    const INTERNAL_ID_SOLT = '2f38c4a57c4487bb96d8faabbe936b14';
    /**

     * @inheritdoc

     */

    public function rules()

    {

        return [

            ['username', 'trim'],

            ['username', 'required'],

            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],

            ['username', 'string', 'min' => 2, 'max' => 255],



            ['surname', 'trim'],

            ['surname', 'string', 'min' => 2, 'max' => 255],



            ['email', 'trim'],

            ['email', 'required'],

            ['email', 'email'],

            ['email', 'string', 'max' => 255],

            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address is already registered, access the '.Html::a('login page to sign in',['site/login'], ['style'=>'font-weight:bold'])],



            ['password', 'required'],

            ['password', 'string', 'min' => 6],

        ];

    }

    public function validateRecaptcha(){
        return (isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response'] != '')?
        true: false;
    }


    public function attributeLabels()

    {

        return [

            'username' => 'Name',
            'surname' => 'Surname',
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

        if (!$this->validateRecaptcha()) {
            return null;
        }

        

        $user = new User();

        $user->username = $this->username;

        $user->surname = $this->surname;

        $user->email = $this->email;

        $user->setPassword($this->password);

        $user->generateAuthKey();

        if($user->save()){
            $user->internal_user_id = md5($user->id.$user->password_hash.$user->auth_key.$this::INTERNAL_ID_SOLT);
            $user->save();
            return $user;
        }

        return null;
    }

}

