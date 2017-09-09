<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

class Lifecycle extends ActiveRecord
{

    public static function tableName()
    {
        return 'lifecycle';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stage'], 'required'],
            [['user_id','rev','rev_month','summary_id'], 'integer'],
            [['stage'], 'string'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'stage' => 'Lifecycle stage. How far along are you ?*',
            'rev' => 'Lifetime Revenues',
            'rev_month' => 'Last month Revenues',
        ];
    }

}
