<?php
/**
 * Разработал Максим Руденко
 * email: rudenko.programmer@gmail.com
 * Дата: 14.10.2017
 */

namespace frontend\controllers;


use common\models\User;
use common\models\UserProfile;

class PlatformDataController
{
    public static function getTalents(){
        $users = User::findAll(['role'=>'user_2', 'status'=>User::STATUS_ACTIVE]);

        if($users) {
            $age_group = [];
            $summ = 0;
            foreach ($users as $user) {
                $profile = UserProfile::find()
                    ->select('user_profile_age_group_id')
                    ->where(['user_id'=>$user->id])
                    ->one();
                if($profile){
                    $age_group_id = $profile->user_profile_age_group_id;
                    if($age_group_id) {
                        $age_group[$age_group_id] =
                            isset($age_group[$age_group_id])
                                ? ++$age_group[$age_group_id] : 1;
                        $summ++;
                    }
                }
            }
            return [
                'age_group' => $age_group,
                'total' => $summ
            ];
        }
        return null;
    }
}