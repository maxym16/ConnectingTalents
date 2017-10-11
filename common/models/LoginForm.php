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



namespace common\models;

use Yii;
use yii\base\Model;


/**
 * Login form
 */
class LoginForm extends Model {
    /**
     * @var string Username
     */
    public $username;

    /**

     * @var string Password

     */
    public $password;

    /**
     * @var integer Number of seconds that the user can remain in logged-in status. Defaults to 0, meaning login till the user closes the browser or the session is manually destroyed.
     */
    public $rememberMe = true;

    /**
     * @var string User Role
     */
    public $ruolo; // TODO Translate

    private $_user;

    /**
     * Define Properties rules
     * @inheritdoc
     */
    public function rules() {

        return [

            // username and password are both required

            [['username', 'password'], 'required'],
            ['ruolo', 'required', 'when' => function($model) { // TODO Translate

                    return (isset(\Yii::$app->params['template-amos']) && \Yii::$app->params['template-amos']);

                }],
            ['rememberMe', 'boolean'],
            ['password', 'validatePassword'],
            ['ruolo', 'safe'], // TODO Translate

        ];

    }

    public function attributeLabels()
    {
        return [
            'username' => 'Username or email',
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

                $this->addError($attribute, Yii::t('amosplatform', 'Incorrect username or password.'));

            }

        }

    }



    /**

     * Logs in a user using the provided username and password.

     *

     * @return boolean whether the user is logged in successfully

     */

    public function login() {

        if ($this->validate() && $this->validateRecaptcha()) {
            $loginTimeout = Yii::$app->params['loginTimeout'];

            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? $loginTimeout : 0);
        } else {
            return false;
        }

    }


    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */

    protected function getUser() {

        if ($this->_user === null) {
            if (filter_var($this->username, FILTER_VALIDATE_EMAIL)) {
                $this->_user = User::findByEmail($this->username);
            }
            else{
                $this->_user = User::findByUsername($this->username);
            }


        }

        return $this->_user;
    }



}

