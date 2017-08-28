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

use yii\base\Model;
use common\models\User;
use kartik\password\StrengthValidator;

/**
 * First-Login form
 */
class FirstAccessForm extends Model
{

    /**
     * @var string Username
     */
    public $username;

    /**
     * @var string Password
     */
    public $password;

    /**
     * @var string Repeated Password
     */
    public $ripetiPassword;

    /**
     * @var string Password-reset token
     */
    public $token;

    private $_user = false;

    /**
     * Define Properties rules
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password', 'ripetiPassword'], 'safe'],
            [['password'], StrengthValidator::className(), 'min' => 8, 'preset' => 'normal', 'userAttribute' => 'username'],
            ['ripetiPassword', 'compare', 'compareAttribute' => 'password', 'message' => 'Le password non coincidono'],
            [['username', 'password', 'ripetiPassword'], 'required'],
            [['token'], 'string']
    ];
    }


    /**
     * Find User by Username
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }

    /**
     * Check Username existence
     * @param string $username Username
     * @return User|null
     */
    public function verifyUsername($username)
    {
        $user = new User();
        $verifyUsername = $user->findOne(['username' => $username]);
        return $verifyUsername;
    }
}
