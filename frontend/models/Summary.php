<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

class Summary extends ActiveRecord
{

    public static function tableName()
    {
        return 'opport_summary';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'date', 'based', 'markets'], 'required'],
            [['date'], 'date','format'=>'Y-m-d'],
            [['incorp'], 'integer'],
            [['links'], 'string'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'description' => 'Short description of Startup*',
            'date' => 'When did you start this company ?*',
            'incorp' => 'Are you incorporated ?',
            'based' => 'Where are you based ?*',
            'markets' => 'Markets*',
            'links' => 'Links*',
        ];
    }

}
