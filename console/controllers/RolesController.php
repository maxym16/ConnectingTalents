<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
use common\components\rbac\UserGroupRule;
use common\models\UserProfileRole;
use common\models\UserProfile;
use yii\console\Exception;
use yii\helpers\ArrayHelper;

/**
 * Description of RolesController
 */
class RolesController extends Controller 
{

    public function actionAssign()
    {
        $username = $this->prompt('Username:', ['required' => true]);
        $user = $this->findModel($username);
        $roleName = $this->select('Role:', ArrayHelper::map(Yii::$app->authManager->getRoles(), 'name', 'description'));

        $authManager = Yii::$app->getAuthManager();
        $role = $authManager->getRole($roleName);
        
        $authManager->assign($role, $user->id);

        $this->stdout('Done!' . PHP_EOL);
    }


    public function actionRevoke()
    {
        $username = $this->prompt('Username:', ['required' => true]);
        $user = $this->findModel($username);
        $roleName = $this->select('Role:', ArrayHelper::merge(
            ['all' => 'All Roles'],
            ArrayHelper::map(Yii::$app->authManager->getRolesByUser($user->id), 'name', 'description'))
        );
        $authManager = Yii::$app->getAuthManager();

        if ($roleName == 'all') {
            $authManager->revokeAll($user->id);
        } else {
            $role = $authManager->getRole($roleName);
            $authManager->revoke($role, $user->id);
        }
        $this->stdout('Done!' . PHP_EOL);
    }


    private function findModel($username)
    {
        if (!$model = UserProfile::findOne(['nome' => $username])) {
            throw new Exception('User is not found');
        }
        return $model;
    }
}
