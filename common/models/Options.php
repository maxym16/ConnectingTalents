<?php

namespace common\models;

/**
 * Class Options
 * @package common\models
 *
 * @property string $name
 * @property string $value
 */
class Options extends \yii\db\ActiveRecord
{

//    public $name;
//    public $value;

    public static function tableName()
    {
        return 'options';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'min' => 3],
            [['value'], 'string'],
            [['name'], 'unique'],
            [['name', 'value'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'value' => 'Value'
        ];
    }

    static function setOption($name, $value){
        $obj = new self;
        $obj->load(['name'=>$name, 'value'=>$value], '');

        if($obj->validate()){
            $obj->save();
            return $obj->id;
        }

        return $obj->errors;
    }

    static function getOption($name){
        $obj = self::findOne(['name'=>$name]);

        if($obj){
            return $obj->value;
        }

        return null;
    }


}