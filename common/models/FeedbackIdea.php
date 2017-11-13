<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "feedback_idea".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $email
 * @property string $date
 * @property string $ffrom
 * @property string $fto
 * @property string $rev
 */
class FeedbackIdea extends \yii\db\ActiveRecord
{
    public $type;

    public static function tableName()
    {
        return 'feedback_idea';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'email', 'type'], 'required'],
            [['description','ffrom','fto','rev'], 'string'],
            [['date'], 'safe'],
            [['title', 'email'], 'string', 'max' => 256],
            [['email'], 'email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'email' => 'Email',
            'date' => 'Date',
            'ffrom' => 'From',
            'fto' => 'To',
            'rev' => 'Revision',
        ];
    }
    
    public function sendEmail(){

        $email = '';
        $subject = '';
        $template = '-feedbackMail-text';
        
        switch($this->type){
            case 'feedback':
                $email = 'feedbackEmail';
                $subject = 'Feedback from site ';
                $template = 'feedback'.$template;
                break;
            case 'bug':
                $email = 'bugEmail';
                $subject = 'User find BUG on site ';
                $template = 'bug'.$template;
                break;
            default: return null;
        }
        
        return Yii::$app->mailer->compose(['text' => $template], ['model'=>$this])
            ->setFrom([Yii::$app->params['supportEmail']=>$this->email])
            ->setTo(Yii::$app->params[$email])
            ->setSubject($subject . Yii::$app->params['myApplication'])
            ->send();
    }

    public function clear(){
        $this->type =
            $this->title =
                $this->description =
                    $this->email = '';
    }
    
}
