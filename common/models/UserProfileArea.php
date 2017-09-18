<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_profile_area".
 *
 * @property integer $id
 * @property string $name
 * @property integer $enabled
 * @property integer $order
 */
class UserProfileArea extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_profile_area';
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
