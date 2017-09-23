<?php

namespace common\components\rbac;

use Yii;
use yii\rbac\Rule;
use yii\helpers\ArrayHelper;
use common\models\User;
use common\models\UserProfile;
use common\models\UserProfileRole;

/*
 * Description of UserRoleRule
 * Порівнюємо роль поточного юзера з роллю,що необхідна для отримання доступу
 */
class UserRoleRule extends Rule
{
    private $_assignments = [];
    public $name = 'userRole'; //назва правила

    /*
     * $user - id поточного користув.
     * $item - об'єкт ролі ,що перевіряємо у користув.
     * $params - параметри, що можна передати для перевірки
     */
    public function execute($user, $item, $params)
    {
        if ($role = $this->userRole($user)) {
            switch ($item->name) {
                case User::ROLE_ADMIN:
                    return $role == User::ROLE_ADMIN;
 
                case User::ROLE_ADMINCT:
                    return $role == User::ROLE_ADMIN || $role == User::ROLE_ADMINCT;
 
                case User::ROLE_ADMINEMAIL:
                    return $role == User::ROLE_ADMIN || $role == User::ROLE_ADMINCT  || $role == UserProfileRole::ROLE_ADMINEMAIL;
 
                case User::ROLE_USER3:
                    return in_array($role, [User::ROLE_ADMIN, User::ROLE_ADMINCT, User::ROLE_USER3]);
 
                case User::ROLE_USER2:
                    return in_array($role, [User::ROLE_ADMIN, User::ROLE_ADMINCT, User::ROLE_USER3, User::ROLE_USER2]);
 
                case User::ROLE_USER1:
                    return in_array($role, [User::ROLE_ADMIN, User::ROLE_ADMINCT, User::ROLE_USER3, User::ROLE_USER2, User::ROLE_USER1]);
 
                case User::ROLE_GUEST:
                    return in_array($role, [User::ROLE_ADMIN, User::ROLE_ADMINCT, User::ROLE_USER3, User::ROLE_USER2, User::ROLE_USER1, User::ROLE_GUEST]);
            }
        }
/*
        // Отримуємо масив користувача з бази 
        $user = ArrayHelper::getValue($params, 'user', User::findOne($user));

        if ($user) {
            $role = $user->role;

            if ($item->name === 'admin') {
                return $role == UserProfileRole::ROLE_ADMIN;
            }
            elseif ($item->name === 'admin_ct') {
                return $role == UserProfileRole::ROLE_ADMIN || $role == UserProfileRole::ROLE_ADMINCT;
            }
            elseif ($item->name === 'admin_email') {
                return $role == UserProfileRole::ROLE_ADMIN || $role == UserProfileRole::ROLE_ADMINCT 
                        || $role == UserProfileRole::ROLE_ADMINEMAIL;
            }
            elseif ($item->name === 'user_3') {
                return $role == UserProfileRole::ROLE_ADMIN || $role == UserProfileRole::ROLE_USER3
                         || $role == UserProfileRole::ROLE_ADMINCT;
            }
            elseif ($item->name === 'user_2') {
                return $role == UserProfileRole::ROLE_ADMIN || $role == UserProfileRole::ROLE_USER3
                    || $role == UserProfileRole::ROLE_USER2 || $role == UserProfileRole::ROLE_ADMINCT;
            }
            elseif ($item->name === 'user_1') {
                return $role == UserProfileRole::ROLE_ADMIN || $role == UserProfileRole::ROLE_USER3
                    || $role == UserProfileRole::ROLE_USER2 || $role == UserProfileRole::ROLE_USER1
                         || $role == UserProfileRole::ROLE_ADMINCT;
            }
        }
*/
        return false;
    }
    
    /**
     * @param integer|null $userId ID of user.
     * @return string|false
     */
    protected function userRole($userId)
    {
        $user = Yii::$app->user;      
        if ($userId === null) {
            if ($user->isGuest) {
                return Users::ROLE_GUEST;
            }
            return false;
        }
        if (!isset($this->_assignments[$userId])) {
            $role = false;
            if (!$user->isGuest && $user->id == $userId) {
                $role = $user->role;
            } elseif ($user->isGuest || $user->id != $userId) {
                $role = User::getRoleOfUser($userId);
            }     
            $this->_assignments[$userId] = $role;
        }     
        return $this->_assignments[$userId];
    }

}


