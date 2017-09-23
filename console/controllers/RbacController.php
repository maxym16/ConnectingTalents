<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
use common\components\rbac\UserGroupRule;
use common\components\rbac\UserRoleRule;
use common\models\User;
 
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
        $authManager->add($dashboard);
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
    
    public function actionInitRbac()
    {
        $auth = Yii::$app->getAuthManager();
        $auth->removeAll();

        $userRoleRule = new UserRoleRule;
        $auth->add($userRoleRule);

        // Create roles
        $admin = $auth->createRole(User::ROLE_ADMIN);
        $admin->ruleName = $userRoleRule->name;
        $admin->description = 'Administrator';
        $auth->add($admin);
        $adminct = $auth->createRole(User::ROLE_ADMINCT);
        $adminct->ruleName = $userRoleRule->name;
        $adminct->description = 'Administrator of the Connecting Talents';
        $auth->add($adminct);
        $adminemail = $auth->createRole(User::ROLE_ADMINEMAIL);
        $adminemail->ruleName = $userRoleRule->name;
        $adminemail->description = 'Administrator email';
        $auth->add($adminemail);
    
        $user1 = $auth->createRole(User::ROLE_USER1);
        $user1->ruleName = $userRoleRule->name;
        $user1->description = 'User level1';
        $auth->add($user1);
        $user2 = $auth->createRole(User::ROLE_USER2);
        $user2->ruleName = $userRoleRule->name;
        $user2->description = 'User level2';
        $auth->add($user2);
        $user3 = $auth->createRole(User::ROLE_USER3);
        $user3->ruleName = $userRoleRule->name;
        $user3->description = 'User level3';
        $auth->add($user3);
        $guest = $auth->createRole(User::ROLE_GUEST);
        $guest->ruleName = $userRoleRule->name;
        $guest->description = 'Guest';
        $auth->add($guest);
        
        //Create права доступу
        $dashboard = $auth->createPermission('adminPanel');
        $dashboard->description = 'Admin dashboard';
        $auth->add($dashboard);
        // Create simple, based on action{$NAME} permissions 
        //+ extra_registration,news_view,news_create,news_update,
        //news_delete ,profile_view,profile_update, team_view, 
        //team_create, team_update, team_delete, team_member_add,
        // team_member_delete
        $login  = $auth->createPermission('login');
        $logout = $auth->createPermission('logout');
        $error  = $auth->createPermission('error');
        $signUp = $auth->createPermission('sign-up');
        $index  = $auth->createPermission('index');
        $view   = $auth->createPermission('view');
        $update = $auth->createPermission('update');
        $delete = $auth->createPermission('delete');
        $extraRegistration = $auth->createPermission('extra_registration');
        $newsView = $auth->createPermission('news_view');
        $newsCreate = $auth->createPermission('news_create');
        $newsUpdate = $auth->createPermission('news_update');
        $newsDelete = $auth->createPermission('news_delete');
        $profileView = $auth->createPermission('profile_view');
        $profileUpdate = $auth->createPermission('profile_update');
        $teamView = $auth->createPermission('team_view');
        $teamCreate = $auth->createPermission('team_create');
        $teamUpdate = $auth->createPermission('team_update');
        $teamDelete = $auth->createPermission('team_delete');
        $teamMemberAdd = $auth->createPermission('team_member_add');
        $teamMemberDelete = $auth->createPermission('team_member_delete');
 
        // Add permissions in Yii::$app->auth
        $auth->add($dashboard);
        $auth->add($login);
        $auth->add($logout);
        $auth->add($error);
        $auth->add($signUp);
        $auth->add($index);
        $auth->add($view);
        $auth->add($update);
        $auth->add($delete);
        $auth->add($extraRegistration);
        $auth->add($newsView);
        $auth->add($newsCreate);
        $auth->add($newsUpdate);
        $auth->add($newsDelete);
        $auth->add($profileView);
        $auth->add($profileUpdate);
        $auth->add($teamView);
        $auth->add($teamCreate);
        $auth->add($teamUpdate);
        $auth->add($teamDelete);
        $auth->add($teamMemberAdd);
        $auth->add($teamMemberDelete);

        //Add Child - Додаємо нащадків
        $auth->addChild($user1,$guest);
        $auth->addChild($user2, $user1);
        $auth->addChild($user3, $user2);
        $auth->addChild($adminct, $user3);
        $auth->addChild($adminct, $adminemail);
        $auth->addChild($admin, $adminct);

        // Add permission-per-role in Yii::$app->authManager
        // Guest
        $auth->addChild($guest, $login);
        $auth->addChild($guest, $logout);
        $auth->addChild($guest, $error);
        $auth->addChild($guest, $signUp);
        $auth->addChild($guest, $index);
        $auth->addChild($guest, $view);
 
        // user1
        $auth->addChild($user1, $extraRegistration);
        $auth->addChild($user1, $profileView);
        
        // user2
        $auth->addChild($user2, $profileView);
        $auth->addChild($user2, $profileUpdate);
        $auth->addChild($user2, $teamView);
        $auth->addChild($user2, $teamCreate);
        $auth->addChild($user2, $teamUpdate);
        $auth->addChild($user2, $teamDelete);
        $auth->addChild($user2, $teamMemberAdd);
        $auth->addChild($user2, $teamMemberDelete);
        
        // user3
        
        // admin
        $auth->addChild($admin, $dashboard);
        
    }

    
}

