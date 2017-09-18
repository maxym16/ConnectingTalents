<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
use common\components\rbac\UserGroupRule;

/**
 * Description of RbacController
 */
class RbacController extends Controller
{
    public function actionInit()
    {
        $authManager = \Yii::$app->authManager;
        $authManager->removeAll(); //delete old

//        $rule = new UserRoleRule();
//        $authManager->add($rule);
        
        // Create roles
        $admin = $authManager->createRole('admin');
        $admin->description = 'Administrator';
        $authManager->add($admin);
        $adminct = $authManager->createRole('admin_ct');
        $adminct->description = 'Administrator of the Connecting Talents';
        $authManager->add($adminct);
        $adminemail = $authManager->createRole('admin_email');
        $adminemail->description = 'Administrator email';
        $authManager->add($adminemail);
        $user1 = $authManager->createRole('user_1');
        $user1->description = 'User level1';
        $authManager->add($user1);
        $user2 = $authManager->createRole('user_2');
        $user2->description = 'User 2';
        $authManager->add($user2);
        $user3 = $authManager->createRole('user_3');
        $user3->description = 'User 3';
        $authManager->add($user3);
        $guest  = $authManager->createRole('guest');

        // Add roles in Yii::$app->authManager
        $authManager->add($guest);
        $authManager->add($user1);
        $authManager->add($user2);
        $authManager->add($user3);
        $authManager->add($adminemail);
        $authManager->add($adminct);
        $authManager->add($admin);
 
        //Create права доступу до адмінки
        $dashboard = $authManager->createPermission('adminPanel');
        $dashboard->description = 'Admin dashboard';
        $authManager->add($dashboard);
        // Create simple, based on action{$NAME} permissions 
        //+ extra_registration,news_view,news_create,news_update,
        //news_delete ,profile_view,profile_update, team_view, 
        //team_create, team_update, team_delete, team_member_add,
        // team_member_delete
        $login  = $authManager->createPermission('login');
        $logout = $authManager->createPermission('logout');
        $error  = $authManager->createPermission('error');
        $signUp = $authManager->createPermission('sign-up');
        $index  = $authManager->createPermission('index');
        $view   = $authManager->createPermission('view');
        $update = $authManager->createPermission('update');
        $delete = $authManager->createPermission('delete');
        $extraRegistration = $authManager->createPermission('extra_registration');
        $newsView = $authManager->createPermission('news_view');
        $newsCreate = $authManager->createPermission('news_create');
        $newsUpdate = $authManager->createPermission('news_update');
        $newsDelete = $authManager->createPermission('news_delete');
        $profileView = $authManager->createPermission('profile_view');
        $profileUpdate = $authManager->createPermission('profile_update');
        $teamView = $authManager->createPermission('team_view');
        $teamCreate = $authManager->createPermission('team_create');
        $teamUpdate = $authManager->createPermission('team_update');
        $teamDelete = $authManager->createPermission('team_delete');
        $teamMemberAdd = $authManager->createPermission('team_member_add');
        $teamMemberDelete = $authManager->createPermission('team_member_delete');
 
        // Add permissions in Yii::$app->authManager
        $authManager->add($login);
        $authManager->add($logout);
        $authManager->add($error);
        $authManager->add($signUp);
        $authManager->add($index);
        $authManager->add($view);
        $authManager->add($update);
        $authManager->add($delete);
        $authManager->add($extraRegistration);
        $authManager->add($newsView);
        $authManager->add($newsCreate);
        $authManager->add($newsUpdate);
        $authManager->add($newsDelete);
        $authManager->add($profileView);
        $authManager->add($profileUpdate);
        $authManager->add($teamView);
        $authManager->add($teamCreate);
        $authManager->add($teamUpdate);
        $authManager->add($teamDelete);
        $authManager->add($teamMemberAdd);
        $authManager->add($teamMemberDelete);
 
 
        // Add rule, based on UserExt->group === $user->group
//        $userGroupRule = new UserGroupRule();
//        $authManager->add($userGroupRule);
        // Add rule "UserGroupRule" in roles
//        $guest->ruleName  = $userGroupRule->name;
//        $user1->ruleName  = $userGroupRule->name;
//        $user2->ruleName  = $userGroupRule->name;
//        $user3->ruleName  = $userGroupRule->name;
//        $adminemail->ruleName  = $userGroupRule->name;
//        $adminct->ruleName  = $userGroupRule->name;
//        $admin->ruleName  = $userGroupRule->name;
 
        //Add Child - Додаємо нащадків
        $authManager->addChild($user1,$guest);
        $authManager->addChild($user2, $user1);
        $authManager->addChild($user3, $user2);
        $authManager->addChild($adminct, $user3);
        $authManager->addChild($adminct, $adminemail);
        $authManager->addChild($admin, $adminct);

        // Add permission-per-role in Yii::$app->authManager
        // Guest
        $authManager->addChild($guest, $login);
        $authManager->addChild($guest, $logout);
        $authManager->addChild($guest, $error);
        $authManager->addChild($guest, $signUp);
        $authManager->addChild($guest, $index);
        $authManager->addChild($guest, $view);
 
        // user1
        $authManager->addChild($user1, $extraRegistration);
        $authManager->addChild($user1, $profileView);
        
        // user2
        $authManager->addChild($user2, $profileView);
        $authManager->addChild($user2, $profileUpdate);
        $authManager->addChild($user2, $teamView);
        $authManager->addChild($user2, $teamCreate);
        $authManager->addChild($user2, $teamUpdate);
        $authManager->addChild($user2, $teamDelete);
        $authManager->addChild($user2, $teamMemberAdd);
        $authManager->addChild($user2, $teamMemberDelete);
        
        // user3
        
    }
}

