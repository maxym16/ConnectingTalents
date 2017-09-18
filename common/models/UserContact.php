<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_contact".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $contact_id
 * @property string $status
 * @property string $accepted_at
 * @property integer $reminders_count
 * @property string $last_reminder_at
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $deleted_by
 */
class UserContact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'contact_id', 'status'], 'required'],
            [['user_id', 'contact_id', 'reminders_count', 'created_by', 'updated_by', 'deleted_by'], 'integer'],
            [['accepted_at', 'last_reminder_at', 'created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['status'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'contact_id' => 'Contact ID',
            'status' => 'Status',
            'accepted_at' => 'Accepted At',
            'reminders_count' => 'Reminders Count',
            'last_reminder_at' => 'Last Reminder At',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'deleted_by' => 'Deleted By',
        ];
    }
}
