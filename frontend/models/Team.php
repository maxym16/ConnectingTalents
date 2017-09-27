<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property integer $id
 * @property string $name
 * @property integer $owner
 * @property integer $owner_opport
 * @property string $description
 * @property string $date
 * @property integer $type
 * @property integer $team_role_id
 * @property integer $parent_id
 * @property integer $visible
 * @property integer $status
 */
class Team extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'team';
    }

    public function rules()
    {
        return [
            [['name', 'owner', 'description', 'date' ], 'required'],
            [['owner', 'owner_opport', 'type', 'team_role_id', 'parent_id', 'visible', 'status'], 'integer'],
            [['description','joined_team_id'], 'string'],
            [['date'], 'string'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'owner' => 'Owner of team',
            'owner_opport' => 'Owner of opportunity',
            'description' => 'Description',
            'date' => 'Date',
            'type' => 'Type',
            'joined_team_id' => 'Joined team',
            'team_role_id' => 'Team Role ID',
            'parent_id' => 'Parent ID',
            'visible' => 'Visible',
            'status' => 'Status',
        ];
    }
}
