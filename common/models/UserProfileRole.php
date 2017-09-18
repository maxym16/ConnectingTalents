<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_profile_role".
 *
 * @property integer $id
 * @property string $name
 * @property integer $enabled
 * @property integer $order
 */
class UserProfileRole extends \yii\db\ActiveRecord
{
    const ROLE_USER1 = 'user1';
    const ROLE_USER2 = 'user2';
    const ROLE_USER3 = 'user3';
    const ROLE_ADMIN = 'admin';
    
    public static function tableName()
    {
        return 'user_profile_role';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'enabled', 'order'], 'required'],
            [['enabled', 'order'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'enabled' => 'Enabled',
            'order' => 'Order',
        ];
    }
}
