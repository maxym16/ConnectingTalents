<?php

namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use lispa\amos\admin\models\UserProfile;
use lispa\amos\core\record\Record;
use yii\db\Query;

/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $surname
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $auth_key
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password write-only password
 */
class User extends Record implements IdentityInterface 
    {

    /**
     * @var array EAuth attributes
     */
    public $profile;

    /**
     * @const STATUS_DELETED User-status: Deleted
     */
    const STATUS_DELETED = 0;

    /**
     * @const STATUS_ACTIVE User-status: Active
     */
    const STATUS_ACTIVE = 10;
    //roles
    const ROLE_GUEST = 'guest';
    const ROLE_USER1 = 'user_1';
    const ROLE_USER2 = 'user_2';
    const ROLE_USER3 = 'user_3';
    const ROLE_ADMIN = 'admin';
    const ROLE_ADMINCT = 'admin_ct';
    const ROLE_ADMINEMAIL = 'admin_email';
    const ROLE_FAN = 'fan';
    const ROLE_CONTRIBUTOR = 'contributor';
    const ROLE_PARTNER = 'partner';
    const ROLE_SPONSOR = 'sponsor';
 
    /**
     * return array all access roles Повертає масив всіх доступних ролей
     * @return array
     */
    static public function roleArray()
    {
        return [
        self::ROLE_USER1,
        self::ROLE_USER2,
        self::ROLE_USER3,
        self::ROLE_ADMIN,
        self::ROLE_ADMINCT,
        self::ROLE_ADMINEMAIL,
        self::ROLE_FAN,
        self::ROLE_CONTRIBUTOR,
        self::ROLE_PARTNER,
        self::ROLE_SPONSOR,
        ];
    }
    public $authKey;
    /**
     * @return string
     */
    public function __toString()
    {
        return $this->username;
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

/*    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        $auth = Yii::$app->authManager;
        $role = $auth->getRole('user_1');
        $auth->assign($role, $this->id);

        return true;
    }
*/
    /**
     * Define Properties rules
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
            ['email', 'email'],
            [['username', 'surname', 'role'], 'string'],
            [['email'], 'unique'],
            [['email'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id) 
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);

    }

    /**
     * @param \nodge\eauth\ServiceBase $service
     * @return User
     * @throws ErrorException
     */
    public static function findByEAuth($service) {
        if (!$service->getIsAuthenticated()) {
            throw new ErrorException('EAuth user should be authenticated before creating identity.');
        }
        $id = $service->getServiceName().'-'.$service->getId();

        $attributes = [
            'id' => $id,
            'username' => $service->getAttribute('name'),
            'authKey' => md5($id),
            'profile' => $service->getAttributes(),
        ];
        $attributes['profile']['service'] = $service->getServiceName();
        Yii::$app->getSession()->set('user-'.$id, $attributes);
//        var_dump(new self()); exit;
        return new self($attributes);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null) {
        throw new NotSupportedException(Yii::t('amosplatform', '"findIdentityByAccessToken" is not implemented.'));
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username) 
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
                    'password_reset_token' => $token,
                    'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return boolean
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

    /**
     * Get User profile
     * @return null|\yii\db\ActiveQuery
     */
    public function getUserProfile() 
    {
        if (\Yii::$app->db->getTableSchema('user_profile', true) !== NULL) {
            return $this->hasOne(UserProfile::className(), ['id' => 'id']);
        } else
            return NULL;
    }

    /**
     * Get User profile
     * @return array|null|ActiveRecord
     */
    public function getProfile() 
    {
        if (\Yii::$app->db->getTableSchema('user_profile', true) !== NULL) {
            return $this->getUserProfile()->one();
        } else
            return NULL;
    }

    /**
     * Повертає роль користувача або `null`.
     * @return string|null
     */
    public function getRole()
    {
        $identity = $this->getIdentity();
        return $identity !== null ? $identity->role : null;
    }
    
    /**
     * Повертає роль користувача по його ID у випадку успіха і `false` якщо невдача.
     * @param integer $id ID користувача
     * @return string|false
     */
    static public function getRoleOfUser($id)
    {
        return (new Query)
            ->select('role')
            ->from(self::tableName())
            ->where(['id' => $id])
            ->scalar();
    }    
    
}
