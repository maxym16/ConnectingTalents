<?php
/**
 * Разработал Максим Руденко
 * email: rudenko.programmer@gmail.com
 * Дата: 03.09.2017
 */

namespace common\models;


use yii\db\ActiveRecord;

class UserSocial extends ActiveRecord
{

    public function getUser(){
        return $this->hasOne(User::className(), ['id' => 'user_id'] );
    }

    public function rules()
    {
        return [
            [['user_id', 'social_id', 'social'], 'required'],
        ];
    }

    /**
     * @param $social
     * @param $social_data
     * @return User|null|static
     */
    static public function initAutorization($social, $social_data){

        if(isset($social_data['id'])){
            $_social_id = $social_data['id'];
            
            /** Проверяем есть ли запись в БД */
            $social_user = self::findOne(
                ['social_id'=>$_social_id]
            );

            /** Проверяем существует ли запись соц сети */
            if($social_user){
                /** Возвращаем пользователя */
                return User::findOne($social_user->user_id);
            }
            
            $_social_email = $social_data['email'];

            $user = User::findOne(['email'=>$_social_email]);

            /** Если пользователь не существует то создаём его */
            if(!$user){
                $user = new User;
                $user->email = $_social_email;
                $user->username = substr($_social_email,0, strpos($_social_email, '@'));
                $user->auth_key = md5($_social_id);
                $user->setPassword('sold'.$_social_id);
                $user->save();
            }

            $social_user = new self;
            $social_user->social_id = $_social_id;
            $social_user->social = strtolower($social);
            $social_user->user_id = $user->getId();
            $social_user->save();

            return $user;
        }
        
        return null;
    }

}