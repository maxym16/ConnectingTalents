<?php

namespace common\components\rbac;

use Yii;
use yii\rbac\Rule;
use yii\helpers\ArrayHelper;
use common\models\UserProfile;
use common\models\UserProfileRole;

/*
 * Description of UserRoleRule
 * Порівнюємо роль поточного юзера з роллю,що необхідна для отримання доступу
 */
class UserRoleRule extends Rule
{
    public $name = 'userRole'; //назва правила
    /*
     * $user - id поточного користув.
     * $item - об'єкт ролі ,що перевіряємо у користув.
     * $params - параметри, що можна передати для перевірки
     */
    public function execute($user, $item, $params)
    {
        $user = ArrayHelper::getValue($params, 'user', UserProfile::findOne($user));

        if ($user) {
            $role = $user->role;

            if ($item->name === 'admin') {
                return $role == UserProfileRole::ROLE_ADMIN;
            }
            elseif ($item->name === 'user3') {
                return $role == UserProfileRole::ROLE_ADMIN || $role == UserProfileRole::ROLE_USER3;
            }
            elseif ($item->name === 'user2') {
                return $role == UserProfileRole::ROLE_ADMIN || $role == UserProfileRole::ROLE_USER3
                    || $role == UserProfileRole::ROLE_USER2;
            }
        }

        return false;
    }
}