<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "feedback_feed".
 *
 * @property integer $id
 * @property string $email
 * @property string $fire
 * @property string $water
 * @property string $earth
 * @property string $wind
 * @property string $agree
 * @property string $surprised
 * @property string $recommend
 * @property string $text
 * @property string $date
 * @property string $ffrom
 * @property string $fto
 * @property string $rev
 */
class FeedbackFeed extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'feedback_feed';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['email', 'fire', 'water', 'earth', 'wind', 'agree', 'surprised', 'recommend', 'text'], 'required'],
            [['fire', 'water', 'earth', 'wind'], 'number'],
            [['agree', 'surprised', 'recommend', 'text','ffrom','fto','rev'], 'string'],
            [['date'], 'safe'],
            [['email'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'fire' => 'Fire',
            'water' => 'Water',
            'earth' => 'Earth',
            'wind' => 'Wind',
            'agree' => 'Agree',
            'surprised' => 'Surprised',
            'recommend' => 'Recommend',
            'text' => 'Text',
            'date' => 'Date',
            'ffrom' => 'From',
            'fto' => 'To',
            'rev' => 'Revision',
        ];
    }
    
    public function clear(){
        $this->agree =
            $this->surprised =
                $this->recommend =
                    $this->text = '';
    }
    
}
