<?php
/**
 * Разработал Максим Руденко
 * email: rudenko.programmer@gmail.com
 * Дата: 12.10.2017
 */

namespace common\models;


use yii\db\ActiveRecord;

/**
 * Class UserApiData
 * @package common\models
 *
 * @property int $user_id
 * @property string $candidate_id
 * @property string $survey_id
 * @property string $utc_id
 *
 */
class UserApiData extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return '{{%user_api_data}}';
    }

    public function rules()
    {
        return [
            [['user_id', 'candidate_id', 'survey_id', 'utc_id'], 'required'],
            [['user_id', 'candidate_id', 'survey_id', 'utc_id'], 'unique'],
        ];
    }

}