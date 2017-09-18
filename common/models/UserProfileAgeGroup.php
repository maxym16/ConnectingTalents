<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_profile_age_group".
 *
 * @property integer $id
 * @property string $age_group
 * @property integer $enabled
 * @property integer $order
 */
class UserProfileAgeGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_profile_age_group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['age_group', 'enabled', 'order'], 'required'],
            [['enabled', 'order'], 'integer'],
            [['age_group'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'age_group' => 'Age Group',
            'enabled' => 'Enabled',
            'order' => 'Order',
        ];
    }
}
