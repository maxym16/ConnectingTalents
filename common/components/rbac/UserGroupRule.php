<?php

namespace common\components\rbac;

use Yii;
use yii\rbac\Rule;

/**
 * Description of UserGroupRule
 */
class UserGroupRule extends Rule
{
    public $name = 'userGroup';
 
    public function execute($user, $item, $params)
    {
        if (!\Yii::$app->user->isGuest) {
            $group = \Yii::$app->user->identity->group;
            if ($item->name === 'admin') {
                return $group == 'admin';
            } 
            elseif ($item->name === 'admin_ct') {
                return $group == 'admin' || $group == 'admin_ct';
            } 
            elseif ($item->name === 'admin_email') {
                return $group == 'admin' || $group == 'admin_ct' || $group == 'admin_email';
            }
            elseif ($item->name === 'user_3') {
                return $group == 'admin' || $group == 'admin_ct' || $group == 'admin_email' || $group == 'user_3';
            }
            elseif ($item->name === 'user_2') {
                return $group == 'admin' || $group == 'admin_ct' || $group == 'admin_email' || $group == 'user_3' || $group == 'user_2';
            }
            elseif ($item->name === 'user_1') {
                return $group == 'admin' || $group == 'admin_ct' || $group == 'admin_email' || $group == 'user_3' || $group == 'user_2' || $group == 'user_1';
            }
        }
        return true;
    }
}
